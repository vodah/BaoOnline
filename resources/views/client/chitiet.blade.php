@extends('layouts.client')
@section('title', $baidang->TieuDe)
@section('content')

    <div id="fb-root"></div>
    <script>(function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = 'https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v3.0&appId=318314091987717&autoLogAppEvents=1';
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>

<div class="body-content">
    <br>
    <br>
    <div class="chitiet-khung">
        <p class="baiviet-span"><b>{{$baidang->TieuDe}}</b></p>
        <div>

            <div class="fb-like" data-href="{{env('APP_URL') .'/'. $baidang->slug}}" data-lout="standard" data-action="like" data-size="small" data-show-faces="true" data-share="true">
            </div>
        </div>

        <span><b>{{$baidang->MoTa}}</b></span>
        <br>
        <img width="100%" height="495px" src="{{asset($baidang->Anh)}}" alt="">
        <br>
        <?php echo $baidang->NoiDung; ?>
        <br>
        <span>Bài được đăng lúc:<?php
            $time = date_timestamp_get($baidang->created_at);
            echo date(' H:i d/m/Y',$time)
            ?> </span>

        <div class="nguoidang">
            <span>{{$baidang->LuotXem}}:Lượt xem</span>
            <br>
            <span>Được đăng bởi:<b>&nbsp;{{$baidang->NguoiDang}}</b></span>
        </div>
        <br><br><br>
    </div>
</div>

@endsection