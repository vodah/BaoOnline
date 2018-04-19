@extends('layouts.client')
@section('title', 'Trang chủ')
@section('content')

<div class="body-content">
    <br>
    <div class="noibat">
        <div class="tieu-de">
            <p class="tieu-de-span">Nổi Bật</p>
        </div>
        <div class="nen-tieude">

        </div>

        @foreach($noibat as $item)
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
        @endforeach

    </div>
    <br>
    @foreach($danhmuc as $item)
    <div class="noibat">
        <div class="tieu-de">
            <p class="tieu-de-span">
                <a class="ten-tieude" href="{{$item->slug}}">{{$item->TenDanhMuc}}</a></p>
        </div>
        <div class="nen-tieude">
        </div>
        <?php $key = 0; ?>
        @foreach($baidang as $value)
        @if($value->danhmuc == $item->TenDanhMuc && $key <6)
        <?php $key++; ?>
        <div class="col-sm-4 noibat-khung">
            <div class="baiviet-noibat">
                <div class="anh-tieude">
                    <img width="100%" height="100%" src="{{asset($value->Anh)}}" alt="{{$value->TieuDe}}">
                </div>
                <div class="ten-bai-viet">
                    <p class="baiviet-span"><b>{{$value->TieuDe}}</b></p>
                </div>
                <div class="mo-ta-ngan">
                    <span>{{$value->MoTa}}</span>
                </div>
            </div>
        </div>
        @endif
        @endforeach

    </div>
    @endforeach
    <br>
</div>

@endsection
