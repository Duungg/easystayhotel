@extends('admin.layouts.master')
@section('content')
<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Ảnh</th>
            <th>Loại Phòng</th>
            <th>Hành động</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $item )
        <tr>
            <td>{{$item->id}}</td>
            <td>
                <img width="150px" src="{{Storage::url($item->anh)}}" alt="Ảnh của phòng khách sạn">
            </td>
            <td>{{$item->loai_phong->ten}}</td>
            <td>

                <form action="{{route('admin.anh_phong.destroy',$item)}}" method="post">
                    @csrf
                    @method('delete')
                    <button type="submit" onclick="return confirm('Bạn có muốn xóa không ?')" class="btn btn-danger">XÓA</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection