@extends('admin.layouts.master')
@section('content')
    <form class="m-3" action="{{route('admin.khach_san.update',$khach_san)}}" method="post" enctype="multipart/form-data">
        
        @csrf
        @method('put')
        <h2>Cập nhật thông tin khách sạn</h2>
        <label for="ten">Tên</label>
        <input type="text" name="ten" id="ten" class="form-control" value="{{$khach_san->ten}}">

        <label class="mt-3" for="logo">Logo</label> 
        <input type="file" id="logo" name="logo" class="form-control" value="{{$khach_san->logo}}">
        <img class="mt-3" width="150px" src="{{Storage::url($khach_san->logo)}}" alt=""> <br>

        <label for="">Số điện thoại</label>
        <input type="text" name="so_dien_thoai" id="so_dien_thoai" class="form-control" value="{{$khach_san->so_dien_thoai}}">

        <label class="mt-3" for="email">Email</label>
        <input type="text" name="email" id="email" class="form-control" value="{{$khach_san->email}}">

        <label class="mt-3" for="dia_chi">Địa chỉ</label>
        <input type="text" name="dia_chi" id="dia_chi" class="form-control" value="{{$khach_san->dia_chi}}">

        <button class="btn btn-success mt-3">GỬI</button>
    </form>
@endsection