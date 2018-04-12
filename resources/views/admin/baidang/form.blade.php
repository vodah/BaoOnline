@extends('layouts.admin')
@section('title','Thêm mới danh mục')
@section('content')

<div class="panel-body">
    <form action="{{route('danhmuc.luu')}}" method="post" style="width: 70%; margin: auto" enctype="multipart/form-data" novalidate>

        {{csrf_field()}}
        <input type="hidden" name="id" value="">
        <div class="form-group">
            <label for="">Tiêu Đề <span class="text-danger">*</span></label>
            <input type="text" autofocus class="form-control"  name="TenDanhMuc" value="" placeholder="Nhập Tên">
            @if(asset($errors->first('TenDanhMuc')))
            <span class="text-danger">{{$errors->first('TenDanhMuc')}}</span>
            @endif
            <br>

        </div>

        <div class="form-group">
            <label for="">Mô Tả <span class="text-danger">*</span></label>
            <textarea class="form-control" placeholder="Tạo mô tả ngắn" rows="4"></textarea>
            @if(asset($errors->first('TenDanhMuc')))
            <span class="text-danger">{{$errors->first('TenDanhMuc')}}</span>
            @endif
            <br>

        </div>
        <div class=from-group">
            <label for="">Nổi Bật</label>
            <input type="checkbox" class="form-check" name="NoiBat">
        </div>

        <div class="form-group">
            <label for="">Tiêu Đề <span class="text-danger">*</span></label>
            <input type="text" autofocus class="form-control"  name="TenDanhMuc" value="" placeholder="Nhập Tên">
            @if(asset($errors->first('TenDanhMuc')))
            <span class="text-danger">{{$errors->first('TenDanhMuc')}}</span>
            @endif
            <br>

        </div>

        <div class="form-group">
            <label for="">Tiêu Đề <span class="text-danger">*</span></label>
            <input type="text" autofocus class="form-control"  name="TenDanhMuc" value="" placeholder="Nhập Tên">
            @if(asset($errors->first('TenDanhMuc')))
            <span class="text-danger">{{$errors->first('TenDanhMuc')}}</span>
            @endif
            <br>

        </div>

        <div class="form-group">
            <label for="">Danh Mục Cha</label>
            <select class="form-control" name="DanhMucCha" >
                <option value=""></option>

            </select>


        </div>

        <div class="form-group text-center">
            <button type="submit" class="btn btn-sm btn-primary">
                <i class="fa fa-save"></i> Thêm
            </button>
            <a href="{{route('danhmuc.list')}}" class="btn btn-sm btn-danger">
                <i class="fa fa-remove"></i> Hủy
            </a>
        </div>



    </form>

</div>

@endsection