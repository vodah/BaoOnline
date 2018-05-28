@extends('layouts.admin')
@section('title', 'Trang chủ')
@section('content')

    <div style="float: left">
        <span>Kết quả tìm kiếm cho: <b>{{$_GET['timkiem']}}</b></span>
    </div>
    <br>

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
            <?php $dem = 0; ?>
            @if($ketqua->count())
                    @foreach($ketqua as $key=> $item)
                        <?php $dem++ ?>
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
            @if($dem == 0)
                <p class="text-center text-info">Không có kết quả tìm kiếm nào khớp với từ khóa này</p>
            @endif
        </table>

        <div class="paginate">
            {!! $ketqua->render() !!}
        </div>

    </div>

@endsection
