@extends('layouts.admin')
@section('title', 'Trang chủ')
@section('content')

    @if (session('status'))
        <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
            <i class="fa fa-check-circle"></i> {{session('status')}}
        </div>
    @endif
<div class="row">

    <div class="col-md-4">
        <div class="metric">
            <span class="icon"><i class="fa fa-eye"></i></span>
            <p>
                <span class="number"><?php $tong = 0;
                    foreach ($thongke as $item) {
                        $tong += $item->LuotXem;
                    }
                    echo $tong; ?></span>
                <span class="title">Tổng số lượt xem</span>
            </p>
        </div>
    </div>
</div>

<div class="panel">
    <div class="panel-heading">
        <h3 class="panel-title">Tốp 10 bài đăng được xem nhiều nhất</h3>
    </div>
    <div class="panel-body">
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>STT</th>
                <th>Tên Bài Đăng</th>
                <th>Danh Mục</th>
                <th>Số lượt xem</th>
            </tr>
            </thead>
            <tbody>
            @if($top->count())
            @foreach($top as $key=> $item)

            <tr>

                <td>{{++$key }}</td>
                <td>{{$item->TieuDe}}</td>
                <td>{{$item->danhmuc}}</td>
                <td>{{$item->LuotXem}}</td>
            </tr>
            </tbody>

            @endforeach
            @endif
        </table>
    </div>
</div>

@endsection
