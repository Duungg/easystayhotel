@extends('admin.layouts.master')
@section('content')
<table class="table">
    <thead>
        <tr>
            <th>Tên</th>
            <th>Logo</th>
            <th>Số điện thoại</th>
            <th>Email</th>
            <th>Địa chỉ</th>
            <th>Hành động</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $item )
        <tr>
            <td>{{$item->ten}}</td>
            <td>
                <!-- <img src="{{$item->logo}} " alt=""> -->
                <img width="150px" src="{{Storage::url($item->logo)}}" alt="">
            </td>
            <td>{{$item->so_dien_thoai}}</td>
            <td>{{$item->email}}</td>
            <td>{{$item->dia_chi}}</td>
            <td>
                <a class="btn btn-warning" href="{{route('admin.khach_san.edit',$item)}}">SỬA</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection