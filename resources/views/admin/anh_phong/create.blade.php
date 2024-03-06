@extends('admin.layouts.master')
@section('content')
<form class="m-3" action="{{route('admin.anh_phong.store')}}" method="post" enctype="multipart/form-data">
    @csrf
    <h2>Thêm mới ảnh phòng</h2>
    <label for="anh">Ảnh</label>
    <input type="file" name="anh" id="anh" class="form-control">

    <label class="mt-3" for="loai_phong_id">Loại phòng</label>
    <select name="loai_phong_id" id="loai_phong_id" class="form-control">
        @foreach ($loai_phong as $id => $ten )
        <option value="{{$id}}">{{$ten}}</option>
        @endforeach
    </select>

    <button class="btn btn-success mt-3">GỬI</button>
</form>
@endsection