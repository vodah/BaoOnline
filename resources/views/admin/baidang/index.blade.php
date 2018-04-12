@extends('layouts.admin')
@section('title', 'Danh sách bài đăng')
@section('content')

@if (session('status'))
<div class="alert alert-success alert-dismissible" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
    <i class="fa fa-check-circle"></i> {{session('status')}}
</div>
@endif

@if (session('status1'))
<div class="alert alert-danger alert-dismissible" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
    <i class="fa fa-times-circle"></i> {{session('status1')}}
</div>
@endif

<div class="btn_add">
    <a href="{{route('danhmuc.them')}}" class="btn btn-success">
        <i class="fa fa-plus"></i> Thêm
    </a>
</div>

<div class="panel-body">
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>STT</th>
            <th>Danh Mục</th>
            <th>Tiêu Đề</th>
            <th>Mô Tả</th>
            <th>Ảnh</th>
            <th>Người Đăng</th>
            <th>Lượt Xem</th>
        </tr>
        </thead>
        <tbody>
        @if($baidang->count())
        @foreach($baidang as $key=> $item)
        <tr>
            <td>{{++$key }}</td>
            <td>{{$item->id}}</td>
            <td>{{$item->TieuDe}}</td>
            <td>{{$item->MoTa}}</td>
            <td>{{$item->Anh}}</td>
            <td>{{$item->NguoiXem}}</td>
            <td>{{$item->LuotXem}}</td>
            <td style="width: 25%">
                <a href="{{route('danhmuc.sua',['id' => $item->id])}}">

                    <button type="button" class="btn btn-primary"><i class="fa fa-pencil-square"></i>&nbsp; Cập Nhật</button>
                </a>
                <a href="{{route('danhmuc.xoa',['id' => $item->id])}}">

                    <button type="button" class="btn btn-danger"><i class="fa fa-trash-o"></i>&nbsp; Xóa</button>
                </a>
            </td>
        </tr>

        </tbody>
        @endforeach
        @endif
    </table>

</div>
@endsection