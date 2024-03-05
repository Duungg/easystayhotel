<?php

namespace App\Http\Controllers\Backend;

use App\Models\Bai_viet;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class BaiVietController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    const PATH_VIEW = 'admin.bai_viet.';
    const PATH_UPLOAD = 'bai_viet';
    public function index()
    {
        $data = Bai_viet::query()->latest()->paginate(5);
        return view(self::PATH_VIEW . __FUNCTION__, compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view(self::PATH_VIEW . __FUNCTION__);
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
        Bai_viet::query()->create($data);
        return back()->with('msg','Thêm thành công');
    }

    /**
     * Display the specified resource.
     */
    public function show(Bai_viet $bai_viet)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Bai_viet $bai_viet)
    {
        return view(self::PATH_VIEW . __FUNCTION__, compact('bai_viet'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Bai_viet $bai_viet)
    {
        $data = $request->except('anh');
        if($request->hasFile('anh')){
            $data['anh'] = Storage::put(self::PATH_UPLOAD, $request->file('anh'));
        }
        $oldAnh = $bai_viet->anh;
        if($request->hasFile('anh') && (Storage::exists($oldAnh))){
            Storage::delete($oldAnh);
        }
        $bai_viet->update($data);
        return back()->with('msg','Thêm thành công');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Bai_viet $bai_viet)
    {
        $bai_viet->delete();

        if(Storage::exists($bai_viet->anh)){
            Storage::delete($bai_viet->anh);
        }

        return back()->with('msg', 'Xóa thành công');
    }
}
