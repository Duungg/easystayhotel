<?php

namespace App\Http\Controllers\Backend;

use App\Models\Anh_phong;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Loai_phong;
use Illuminate\Support\Facades\Storage;

class AnhPhongController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    const PATH_VIEW = 'admin.anh_phong.';
    const PATH_UPLOAD = 'anh_phong';
    public function index()
    {
        $data = Anh_phong::query()->latest()->paginate(10);
        return view(self::PATH_VIEW . __FUNCTION__, compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $loai_phong = Loai_phong::query()->pluck('ten','id')->toArray();
        return view(self::PATH_VIEW . __FUNCTION__, compact('loai_phong'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->except('anh');
        if($request->hasFile('anh')){
            $data['anh'] = Storage::put(self::PATH_UPLOAD, $request->file('anh'));
        }
        Anh_phong::query()->create($data);
        return back()->with('msg','Thêm thành công');
    }

    /**
     * Display the specified resource.
     */
    public function show(Anh_phong $anh_phong)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Anh_phong $anh_phong)
    {
        $loai_phong = Loai_phong::query()->pluck('ten','id')->toArray();
        return view(self::PATH_VIEW . __FUNCTION__, compact('loai_phong','anh_phong'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Anh_phong $anh_phong)
    {
        $data = $request->except('anh');
        if($request->hasFile('anh')){
            $data['anh'] = Storage::put(self::PATH_UPLOAD, $request->file('anh'));
        }
        $oldAnh = $anh_phong->anh;
        if($request->hasFile('anh') && (Storage::exists($oldAnh))){
            Storage::delete($oldAnh);
        }
        $anh_phong->update($data);
        return back()->with('msg','Thêm thành công');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Anh_phong $anh_phong)
    {
        $anh_phong->delete();
        if(Storage::exists($anh_phong->anh)){
            Storage::delete($anh_phong->anh);
        }
        return back()->with('msg', 'Xóa thành công');
    }
}
