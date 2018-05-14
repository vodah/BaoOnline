@extends('layouts.admin')
@section('title', 'Đổi mật khẩu')
@section('content')

    @if (session('status'))
        <div class="alert alert-danger alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
            <i class="fa fa-times-circle"></i> {{session('status')}}
        </div>
    @endif
    @if (session('status1'))
        <div class="alert alert-danger alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
            <i class="fa fa-times-circle"></i> {{session('status1')}}
        </div>
    @endif

    <div class="panel-body">
        <form action="{{route('matkhau.luu')}}" method="post" style="width: 50%; margin: auto" enctype="multipart/form-data" novalidate>

            {{csrf_field()}}
            <div class="form-group">
                <label for="">Nhập mật khẩu cũ <span class="text-danger">*</span></label>
                <input type="password" autofocus class="form-control"  name="password" id="password" placeholder="Nhập mật khẩu cũ">
                @if(asset($errors->first('password')))
                    <span class="text-danger">{{$errors->first('password')}}</span>
                @endif
                <br>

            </div>
            <div class="form-group">
                <label for=""> Nhập mật khẩu mới<span class="text-danger">*</span></label>
                <input type="password" autofocus class="form-control"  name="mk_moi" id="mk_moi" value="" placeholder="Nhập mật khẩu mới">
                @if(asset($errors->first('mk_moi')))
                    <span class="text-danger">{{$errors->first('mk_moi')}}</span>
                @endif
                <br>

            </div>
            <div class="form-group">
                <label for="">Nhập lại mật khẩu mới<span class="text-danger">*</span></label>
                <input type="password" autofocus class="form-control"  name="kt_mk" id="kt_mk"  placeholder="Nhập lại mật khẩu mới">
                @if(asset($errors->first('kt_mk')))
                    <span class="text-danger">{{$errors->first('kt_mk')}}</span>
                @endif
                <br>

            </div>


            <div class="form-group text-center">
                <button type="submit" class="btn btn-sm btn-primary">
                    <i class="fa fa-save"></i> Cập nhật
                </button>
                <a href="{{route('admin')}}" class="btn btn-sm btn-danger">
                    <i class="fa fa-remove"></i> Hủy
                </a>
            </div>



        </form>

    </div>

@endsection
