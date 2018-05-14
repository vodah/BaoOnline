@extends('layouts.admin')
@section('title', 'Cập nhật thông tin tài khoản')
@section('content')

    @if (session('status'))
        <div class="alert alert-danger alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
            <i class="fa fa-times-circle"></i> {{session('status')}}
        </div>
    @endif

    <div class="panel-body">
        <form action="{{route('taikhoan.luu')}}" method="post" style="width: 50%; margin: auto" enctype="multipart/form-data" novalidate>

            {{csrf_field()}}
            <input type="hidden" name="id" value="{{$user->id}}">
            <div class="form-group">
                <label for="">Tên <span class="text-danger">*</span></label>
                <input type="text" autofocus class="form-control"  name="name" id="name" value="{{$user->name}}" placeholder="Nhập Tên">
                @if(asset($errors->first('name')))
                    <span class="text-danger">{{$errors->first('name')}}</span>
                @endif
                <br>

            </div>
            <div class="form-group">
                <label for=""> Email<span class="text-danger">*</span></label>
                <input type="email" autofocus class="form-control"  name="email" id="email" value="{{$user->email}}" placeholder="Nhập Email">
                @if(asset($errors->first('email')))
                    <span class="text-danger">{{$errors->first('email')}}</span>
                @endif
                <br>

            </div>
            <div class="form-group">
                <label for="">Số điện thoại<span class="text-danger">*</span></label>
                <input type="number" autofocus class="form-control"  name="phone" id="phone" value="{{$user->phone}}" placeholder="Nhập số điện thoại">
                @if(asset($errors->first('phone')))
                    <span class="text-danger">{{$errors->first('phone')}}</span>
                @endif
                <br>

            </div>
            <div class="form-group">
                <label for="">Nhập mật khẩu<span class="text-danger">*</span></label>
                <input type="password" autofocus class="form-control"  name="check_password" id="check_password" value="" placeholder="Nhập mật khẩu để xác nhận thay đổi">
                @if(asset($errors->first('check_password')))
                    <span class="text-danger">{{$errors->first('check_password')}}</span>
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
