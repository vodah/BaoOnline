@extends('layouts.admin')
@section('title','Thêm mới danh mục')
@section('content')

<div class="panel-body">
    <form action="{{route('danhmuc.luu')}}" method="post" style="width: 50%; margin: auto" enctype="multipart/form-data" novalidate>

        {{csrf_field()}}
        <input type="hidden" name="id" value="{{$nhom->id}}">
        <div class="form-group">
            <label for="">Tên Danh Mục <span class="text-danger">*</span></label>
            <input type="text" autofocus class="form-control"  name="TenDanhMuc" id="TenDanhMuc" value="{{$nhom->TenDanhMuc}}" placeholder="Nhập Tên">
            @if(asset($errors->first('TenDanhMuc')))
            <span class="text-danger">{{$errors->first('TenDanhMuc')}}</span>
            @endif
            <br>

        </div>


        <div class="form-group text-center">
            <button type="submit" class="btn btn-sm btn-primary">
                <i class="fa fa-save"></i> Lưu
            </button>
            <a href="{{route('danhmuc.list')}}" class="btn btn-sm btn-danger">
                <i class="fa fa-remove"></i> Hủy
            </a>
        </div>



    </form>

</div>

@endsection