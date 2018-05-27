@extends('layouts.client')
@section('title', 'Kết quả tìm kiếm')
@section('content')

    <div class="body-content">
        <br>
        <br>
        <span>Kết quả tìm kiếm cho: <b>{{$_GET['tim_kiem']}}</b></span>
        <div class="danhmuc_timkiem">

            {{--<div class="nen-tieude">--}}
            {{--</div>--}}
            <?php $dem = 0; ?>
            @foreach($ketqua as $item)
                <?php $dem++ ?>
                <div class="col-sm-4 noibat-khung">
                    <div class="baiviet-noibat">
                        <div class="anh-tieude">
                            <a href="{{$item->slug}}">
                                <img width="100%" height="100%" src="{{asset($item->Anh)}}" alt="{{$item->TieuDe}}">
                            </a>
                        </div>
                        <div class="ten-bai-viet">
                            <a href="{{$item->slug}}">
                                <p class="baiviet-span"><b>{{$item->TieuDe}}</b></p>
                            </a>
                        </div>
                        <div class="mo-ta-ngan">
                            <span>{{$item->MoTa}}</span>
                        </div>
                    </div>
                </div>
                    <div style="height: 20px"></div>
            @endforeach
        @if($dem == 0)
                <p class="text-center text-info">Không có kết quả tìm kiếm nào khớp với từ khóa này</p>
            @endif

            <div class="paginate" style="text-align: center">
                {!! $ketqua->render() !!}
            </div>
            <br>
        </div>
        <br>
        <br>
    </div>
@endsection