@extends('admin.layouts.master')
@section('content')
<form class="m-3" action="{{route('admin.loai_phong.update',$loai_phong)}}" method="post" enctype="multipart/form-data">
    @csrf
    @method('put')
    <h2>Cập nhật loại phòng</h2>
    <label for="ten">Tên</label>
    <input type="text" id="ten" name="ten" class="form-control" value="{{$loai_phong->ten}}">

    <label class="mt-3" for="anh">Ảnh</label>
    <input type="file" id="anh" name="anh" class="form-control" value="{{$loai_phong->anh}}"><br>
    <img src="{{Storage::url($loai_phong->anh)}}" alt=""> <br>

    <label class="mt-3" for="gia">Giá</label>
    <input type="text" id="gia" name="gia" class="form-control" value="{{$loai_phong->gia}}">

    <label class="mt-3" for="gia_km">Giá khuyến mãi</label>
    <input type="text" id="gia_km" name="gia_km" class="form-control" value="{{$loai_phong->gia_km}}">

    <label class="mt-3" for="so_lg">Số lượng</label>
    <input type="text" id="so_lg" name="so_lg" class="form-control" value="{{$loai_phong->so_lg}}">

    <label class="mt-3" for="mo_ta">Mô tả</label>
    <input type="text" id="mo_ta" name="mo_ta" class="form-control" value="{{$loai_phong->mo_ta}}">

    <label class="mt-3" for="trang_thai1">Trạng thái: </label>
    <input type="radio" name="trang_thai" id="trang_thai1"  @if ($loai_phong->trang_thai == \App\Models\Loai_phong::CON_PHONG) checked @endif
     value="{{\App\Models\Loai_phong::CON_PHONG}}">
    <label for="trang_thai1">CÒN PHÒNG</label>

    <input type="radio" name="trang_thai" id="trang_thai2"  @if ($loai_phong->trang_thai == \App\Models\Loai_phong::HET_PHONG) checked @endif
     value="{{\App\Models\Loai_phong::HET_PHONG}}">
    <label for="trang_thai2">HẾT PHÒNG</label> <br><br>

    <button class="btn btn-success mt-3">GỬI</button>
</form>
@endsection