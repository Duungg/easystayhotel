@extends('admin.layouts.master')
@section('content')
<form class="m-3" action="{{route('admin.loai_phong.store')}}" method="post" enctype="multipart/form-data">
    @csrf
    <h2>Thêm mới loại phòng</h2>
    <label for="ten">Tên</label>
    <input type="text" id="ten" name="ten" class="form-control">

    <label class="mt-3" for="anh">Ảnh</label>
    <input type="file" id="anh" name="anh" class="form-control">

    <label class="mt-3" for="gia">Giá</label>
    <input type="text" id="gia" name="gia" class="form-control">

    <label class="mt-3" for="gia_km">Giá khuyến mãi</label>
    <input type="text" id="gia_km" name="gia_km" class="form-control">

    <label class="mt-3" for="gia_km">Giới hạn người</label>
    <input type="text" id="gioi_han_nguoi" name="gioi_han_nguoi" class="form-control">

    <label class="mt-3" for="so_lg">Số lượng</label>
    <input type="text" id="so_lg" name="so_lg" class="form-control">

    <label class="mt-3" for="mo_ta">Mô tả</label>
    <input type="text" id="mo_ta" name="mo_ta" class="form-control">

    <label class="mt-3" for="trang_thai1">Trạng thái: </label>
    <input type="radio" name="trang_thai" id="trang_thai1" value="{{\App\Models\Loai_phong::CON_PHONG}}">
    <label for="trang_thai1">CÒN PHÒNG</label>

    <input type="radio" name="trang_thai" id="trang_thai2" value="{{\App\Models\Loai_phong::HET_PHONG}}">
    <label for="trang_thai2">HẾT PHÒNG</label> <br><br>

    <button class="btn btn-success mt-3">GỬI</button>
</form>
@endsection
