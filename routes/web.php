<?php

use App\Http\Controllers\Backend\AnhPhongController;
use App\Http\Controllers\Backend\BaiVietController;
use App\Http\Controllers\Backend\KhachSanController;
use App\Http\Controllers\Backend\LoaiPhongController;
use App\Http\Controllers\Backend\PhongController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('admin', function () {
    return view('admin.dashboard');
});

Route::prefix('admin')
    ->as('admin.')
    ->group(function () {
        Route::resource('bai_viet', BaiVietController::class);
        Route::resource('khach_san',KhachSanController::class);
        Route::resource('loai_phong',LoaiPhongController::class);
        Route::resource('phong', PhongController::class);
        Route::resource('anh_phong', AnhPhongController::class);
    });
