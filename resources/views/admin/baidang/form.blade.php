@extends('layouts.admin')
@section('title','Thêm mới bài đăng')
@section('content')

<div class="panel-body">
    <form action="{{route('baidang.luu')}}" method="post" style="width: 70%; margin: auto" enctype="multipart/form-data"
          novalidate>

        {{csrf_field()}}
        <input type="hidden" name="id" value="{{$baidang->id}}">
        <div class="form-group">
            <label for="">Tiêu Đề <span class="text-danger">*</span></label>
            <input type="text" autofocus class="form-control" name="TieuDe" id="TieuDe" value="{{$baidang->TieuDe}}" placeholder="Nhập Tên">
            @if(asset($errors->first('TieuDe')))
            <span class="text-danger">{{$errors->first('TieuDe')}}</span>
            @endif
            <br>

        </div>
        <div class="form-group relative">
            <label for="slug">URL <span class="text-danger">*</span></label>
            <div class="input-group">
                <input class="form-control" type="text" value="{{$baidang->slug}}" id="slug" name="slug" placeholder="URL">
                <span class="input-group-btn"><button id="generate-slug" class="btn btn-success" type="button">Tạo đường
                dẫn</button></span>
            </div>
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
                <option value="{{$baidang->danhmuc}}">{{$baidang->danhmuc}}</option>
                @foreach($danhmuc as $item)
                <option value="{{$item->TenDanhMuc}}">{{$item->TenDanhMuc}}</option>
                @endforeach
            </select>
            @if(asset($errors->first('DanhMuc')))
            <span class="text-danger">{{$errors->first('DanhMuc')}}</span>
            @endif


        </div>

        <div class="form-group">
            <label for="">Mô Tả Ngắn<span class="text-danger">*</span></label>
            <textarea class="form-control" name="MoTa" placeholder="Tạo mô tả ngắn" title="Không viết quá 255 ký tự" rows="4">{{$baidang->MoTa}}</textarea>
            @if(asset($errors->first('MoTa')))
            <span class="text-danger">{{$errors->first('MoTa')}}</span>
            @endif
            <br>

        </div>
        <div class=from-group">
            <label for="">Bài Đăng Nổi Bật</label>
            <br>
            <input type="checkbox" class="input-checkbox"  <?php if ($baidang->NoiBat == 1){ echo "checked";} ?> style="width: 35px;height: 35px;" name="NoiBat">
        </div>
        <br>

        <div class="form-group">
            <label for="Anh">Ảnh Sản Phẩm</label>
            <div class="image-preview" style="background-color: #CCCCCC;width: 50%;height: 200px;">

                <img height="200px" width="355px" id="profile-img-tag" src="{{asset($baidang->Anh)}}" alt="">

            </div>
        </div>

        <div class="form-group">

            <input type="file" name="Anh" id="Anh">

            @if(asset($errors->first('Anh')))
            <span class="text-danger">{{$errors->first('Anh')}}</span>
            @endif

        </div>

        <script type="text/javascript">
            function readURL(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function (e) {
                        $('#profile-img-tag').attr('src', e.target.result);
                    }
                    reader.readAsDataURL(input.files[0]);
                }
            }
            $("#Anh").change(function(){
                readURL(this);
            });
        </script>


        <div class="form-group">
            <label for="">Nội Dung<span class="text-danger">*</span></label>
            <textarea class="form-control" name="NoiDung" id="NoiDung"  rows="20">{{$baidang->NoiDung}}</textarea>
            <script type="text/javascript">
                var editor = CKEDITOR.replace('NoiDung',{
                    language:'vi',
                    filebrowserBrowseUrl :'/admin/assets/scripts/plugin/ckfinder/ckfinder.html',
                    filebrowserImageBrowseUrl : '/admin/assets/scripts/plugin/ckfinder/ckfinder.html?type=Images',
                    filebrowserFlashBrowseUrl : '/admin/assets/scripts/plugin/ckfinder/ckfinder.html?type=Flash',
                    filebrowserUploadUrl : '/admin/assets/scripts/plugin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
                    filebrowserImageUploadUrl : '/admin/assets/scripts/plugin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
                    filebrowserFlashUploadUrl : '/admin/assets/scripts/plugin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash',
                });
            </script>
            @if(asset($errors->first('NoiDung')))
            <span class="text-danger">{{$errors->first('NoiDung')}}</span>
            @endif


        </div>
        <br>

        <div class=from-group">
            <label for="">Người Đăng Bài <span class="text-danger"> *</span></label>
            <input type="text" class="form-control" name="NguoiDang" value="{{$baidang->NguoiDang}}" placeholder="Tác Giả">
        </div>
        @if(asset($errors->first('NguoiDang')))
        <span class="text-danger">{{$errors->first('NguoiDang')}}</span>
        @endif
        <br>

        <div class="form-group text-center">
            <button type="submit" class="btn btn-sm btn-primary">
                <i class="fa fa-save"></i> Lưu
            </button>
            <a href="{{route('baidang.list')}}" class="btn btn-sm btn-danger">
                <i class="fa fa-remove"></i> Hủy
            </a>
        </div>

    </form>

</div>

@endsection