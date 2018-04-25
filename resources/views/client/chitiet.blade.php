@extends('layouts.client')
@section('title', $baidang->TieuDe)
@section('content')


<div class="body-content">
    <br>
    <br>
    <div class="chitiet-khung">
        <p class="baiviet-span"><b>{{$baidang->TieuDe}}</b></p>

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