@extends('layouts.admin')
@section('title', 'Danh sách bài đăng')
@section('content')

@if (session('status'))
<div class="alert alert-success alert-dismissible" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
    </button>
    <i class="fa fa-check-circle"></i> {{session('status')}}
</div>
@endif

@if (session('status1'))
<div class="alert alert-danger alert-dismissible" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
    </button>
    <i class="fa fa-times-circle"></i> {{session('status1')}}
</div>
@endif

<div class="btn_add">
    <a href="{{route('baidang.them')}}" class="btn btn-success">
        <i class="fa fa-plus"></i> Thêm
    </a>
</div>

<div class="panel-body">
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>STT</th>
            <th >Ảnh</th>
            <th width="10%">Danh Mục</th>
            <th width="20%">Tiêu Đề</th>
            <th width="20%">Mô Tả</th>
            <th width="15%">Tác Giả</th>
            <th>Lượt Xem</th>
        </tr>
        </thead>
        <tbody>
        @if($baidang->count())
        @foreach($baidang as $key=> $item)
        <tr>
            <td>{{++$key }}</td>
            <td >
                <img style="width: 190px; height: 100px;" src="{{asset($item->Anh)}}" >
            </td>
            <td>{{$item->danhmuc}}</td>
            <td>{{$item->TieuDe}}</td>
            <td>{{$item->MoTa}}</td>

            <td>{{$item->NguoiDang}}</td>
            <td>{{$item->LuotXem}}</td>
            <td style="width: 20%">
                <a href="{{route('baidang.sua',['id' => $item->id])}}">

                    <button type="button" class="btn col-sm-10 btn-primary"><i class="fa fa-pencil-square"></i>&nbsp;
                        Cập Nhật
                    </button>
                </a>
                <button class="btn btn-danger col-sm-10 button{{$item->id}}"><i class="fa fa-trash-o"></i>&nbsp; Xóa
                </button>

                <script>
                    $(document).ready(function () {
                        $(".button{{$item->id}}").click(function () {
                            var r = confirm("Bạn chắc chắn muốn xóa?\n Thao tác này sẽ xóa và không thể hoàn tác");
                            if (r == true) {

                                window.location.href = '{{route('baidang.xoa', [$item->id])}}';
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
        {!! $baidang->render() !!}
    </div>

</div>
@endsection