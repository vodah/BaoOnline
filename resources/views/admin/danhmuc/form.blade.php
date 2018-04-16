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

        <div class="form-group relative">
            <label for="slug">URL <span class="text-danger">*</span></label>
            <input type="text" class="form-control" value="{{$nhom->slug}}" id="slug" name="slug" placeholder="URL">
            <button type="button" id="generate-slug" class="btn btn-sm btn-success" style="float: right;
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
                    var TenDanhMuc = $('#TenDanhMuc').val();
                    $.ajax({
                        url: '{{route('tendanhmuc.slug')}}',
                        method: "POST",
                        data: {
                        _token: '{{csrf_token()}}',
                            TenDanhMuc: TenDanhMuc
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
            <label for="">Danh Mục Cha</label>
            <select class="form-control" name="DanhMucCha" title="Mặc định sẽ trở thành thư mục cha">
                <option value="{{$nhom->DanhMucCha}}">{{$nhom->DanhMucCha}}</option>
                @foreach($danhmuc as $item)
                <option value="{{$item->TenDanhMuc}}">{{$item->TenDanhMuc}}</option>
                @endforeach
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