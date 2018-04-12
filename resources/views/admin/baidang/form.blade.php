@extends('layouts.admin')
@section('title','Thêm mới danh mục')
@section('content')

<div class="panel-body">
    <form action="{{route('danhmuc.luu')}}" method="post" style="width: 70%; margin: auto" enctype="multipart/form-data"
          novalidate>

        {{csrf_field()}}
        <input type="hidden" name="id" value="">
        <div class="form-group">
            <label for="">Tiêu Đề <span class="text-danger">*</span></label>
            <input type="text" autofocus class="form-control" name="TieuDe" id="TieuDe" value="" placeholder="Nhập Tên">
            @if(asset($errors->first('TenDanhMuc')))
            <span class="text-danger">{{$errors->first('TenDanhMuc')}}</span>
            @endif
            <br>

        </div>
        <div class="form-group relative">
            <label for="slug">URL <span class="text-danger">*</span></label>
            <input type="text" class="form-control" value="" id="slug" name="slug" placeholder="URL">
            <button type="button" id="generate-slug" class=" btn btn-sm btn-success" style="float: right;
    margin-top: -32px;">Tạo đường
                dẫn
            </button>
            @if(asset($errors->first('slug')))
            <span class="text-danger">{{$errors->first('slug')}}</span>
            @endif
        </div>
        <script type="text/javascript">
            $(document).ready(function(){
                $('#generate-slug').on('click', function(){
                    var TieuDe = $('#TieuDe').val();
                    $.ajax({
                        url: '{{route('generate.slug')}}',
                        method: "POST",
                        data: {
                        _token: '{{csrf_token()}}',
                            TieuDe: TieuDe
                    },
                    dataType: "JSON",
                        success: function (rp){
                        $('#slug').val(rp.slug);
                    },
                    error: function(xhr, error, msg){
                        console.log(msg);
                    }
                });
                });
            });
        </script>

        <div class="form-group">
            <label for="">Danh Mục <span class="text-danger">*</span></label>
            <select class="form-control" name="DanhMuc">
                <option value=""></option>
                @foreach($danhmuc as $item)
                <option value="{{$item->TenDanhMuc}}">{{$item->TenDanhMuc}}</option>
                @endforeach
            </select>


        </div>

        <div class="form-group">
            <label for="">Mô Tả Ngắn<span class="text-danger">*</span></label>
            <textarea class="form-control" name="MoTa" placeholder="Tạo mô tả ngắn" title="Không viết quá 255 ký tự" rows="4"></textarea>
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
            <label for="Anh">Ảnh Sản Phẩm</label>
            <div class="image-preview" style="background-color: #CCCCCC;width: 50%;height: 200px;">

                <img width="250" id="profile-img-tag" src="" alt="">

            </div>
        </div>

        <div class="form-group">

            <input type="file" name="Anh" id="Anh">

            @if(asset($errors->first('Anh')))
            <span class="text-danger">{{$errors->first('Anh')}}</span>
            @endif

        </div>


        <div class="form-group">
            <label for="">Nội Dung<span class="text-danger">*</span></label>
            <textarea class="form-control" name="MoTa" id="MoTa" rows="20"></textarea>
            @if(asset($errors->first('TenDanhMuc')))
            <span class="text-danger">{{$errors->first('TenDanhMuc')}}</span>
            @endif
            <br>

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