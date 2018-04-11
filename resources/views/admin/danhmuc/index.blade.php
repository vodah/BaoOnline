@extends('layouts.admin')
@section('title', 'Danh sách danh mục')
@section('content')


<div class="btn_add">
    <button type="button" class="btn btn-success">Thêm</button>
</div>

<div class="panel-body">
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>STT</th>
            <th>Mã danh mục</th>
            <th>Tên Danh Muc</th>
            <th>Danh Mục Cha</th>
        </tr>
        </thead>
        <tbody>
        @if($danhmuc->count())
        @foreach($danhmuc as $key=> $item)
        <tr>
            <td>{{++$key }}</td>
            <td>{{$item->id}}</td>
            <td>{{$item->TenDanhMuc}}</td>
            <td>{{$item->DanhMucCha}}</td>
            <td style="width: 20%">
                <button type="button" class="btn btn-primary">Cập Nhật</button>
                <button type="button" class="btn btn-danger">Xóa</button>
            </td>
        </tr>

        </tbody>
        @endforeach
        @endif
    </table>
</div>
@endsection