@extends('layouts.client')
@section('title', $check->TenDanhMuc)
@section('content')

<div class="body-content">
    <br>
    <div class="noibat">
        <div class="tieu-de">
            <p class="tieu-de-span"><?= $check->TenDanhMuc?></p>
        </div>
        <div class="nen-tieude">

        </div>

        @foreach($baidang as $item)
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

        <div class="paginate" style="float: right">
            {!! $baidang->render() !!}
        </div>
    </div>
    <br>
</div>



@endsection