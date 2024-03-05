<?php

namespace App\Http\Controllers\Backend;

use App\Models\Khach_san;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class KhachSanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    const PATH_VIEW = 'admin.khach_san.';
    const PATH_UPLOAD = 'khach_san';
    public function index()
    {
        $data = Khach_san::query()->paginate();
        return view(self::PATH_VIEW . __FUNCTION__, compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Khach_san $khach_san)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Khach_san $khach_san)
    {
        return view(self::PATH_VIEW . __FUNCTION__, compact('khach_san'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Khach_san $khach_san)
    {
        $data = $request->except('logo');
        if($request->hasFile('logo')){
            $data['logo'] = Storage::put(self::PATH_UPLOAD, $request->file('logo'));
        }
        $oldLogo = $khach_san->logo;
        if($request->hasFile('logo') && Storage::exists($oldLogo)){
            Storage::delete($oldLogo);
        }
        $khach_san->update($data);
        return back()->with('msg', 'Cập nhật thành công');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Khach_san $khach_san)
    {
        //
    }
}
