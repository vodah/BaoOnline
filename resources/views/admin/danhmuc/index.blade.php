@extends('layouts.admin')
@section('title', 'Danh sách danh mục')
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
<!--            <th>ID danh mục</th>-->
            <th>Tên Danh Muc</th>
            {{--<th>Danh Mục Cha</th>--}}
        </tr>
        </thead>
        <tbody>
        @if($danhmuc->count())
        @foreach($danhmuc as $key=> $item)
        <tr>
            <td>{{++$key }}</td>
<!--            <td>{{$item->id}}</td>-->
            <td>{{$item->TenDanhMuc}}</td>
{{--            <td>{{$item->DanhMucCha}}</td>--}}
            <td style="width: 25%">
                <a href="{{route('danhmuc.sua',['id' => $item->id])}}">

                    <button type="button" class="btn btn-primary"><i class="fa fa-pencil-square"></i>&nbsp; Cập Nhật</button>
                </a>

                    <button class="btn btn-danger button{{$item->id}}"><i class="fa fa-trash-o"></i>&nbsp; Xóa</button>

                <script>
                    $(document).ready(function () {
                        $(".button{{$item->id}}").click(function () {
                            var r = confirm("Bạn chắc chắn muốn xóa?\n Thao tác này sẽ xóa và không thể hoàn tác");
                            if (r == true) {

                                window.location.href = '{{route('danhmuc.xoa', [$item->id])}}';
                            }
                        });
                    });

                </script>
            </td>
        </tr>

        </tbody>
        @endforeach
        @endif
    </table>
    <div class="paginate"> 
        <!-- phân trang -->
        {!! $danhmuc->render() !!}
    </div>
</div>

@endsection