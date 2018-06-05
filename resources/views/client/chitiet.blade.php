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
    <div class="form-binh-luan">
        <label style="margin: 10px;">Ý kiến bạn  đọc</label>
        <br>
        <form action="{{route('home.binhluan')}}" method="post" style="width: 90%; margin-left: 5%; " enctype="multipart/form-data" novalidate>
            {{csrf_field()}}
            <input type="hidden" name="baidang_id" value="{{$baidang->id}}">
            <input type="hidden" name="slug" value="{{$baidang->slug}}">
            <div class="form-group">
                <label for=""style="color: red">Tên bạn <span class="text-danger">*</span></label>
                <input type="text" class="form-control"  name="Ten" id="Ten">
                @if(asset($errors->first('Ten')))
                    <span class="text-danger">{{$errors->first('Ten')}}</span>
                @endif

            </div>
            <label for=""style="color: red">Nội Dung<span class="text-danger">*</span></label>
            <textarea class="form-control" name="BinhLuan" id="BinhLuan"  rows="5"></textarea>
            @if(asset($errors->first('BinhLuan')))
                <span class="text-danger">{{$errors->first('BinhLuan')}}</span>
            @endif
            <br>

            <div class="form-group text-right">
                <button type="submit" class="btn btn-sm btn-primary">
                    <i class="fa fa-save"></i> Gửi
                </button>

            </div>
        </form>

    </div>
    <div class="binh-luan">
        <label style="margin: 10px;">Bạn đọc bình luận</label>

        <div class="y-kien">
            <?php $dem = 0; ?>
            @foreach($binhluan as $item)
                <?php $dem++; ?>
                <div <?php if ($dem%2 ==0 ){ echo 'style="background-color: #dedede"'; } else { echo 'style="background-color: honeydew"';} ?>>

                    <label for="">{{ $item->Ten }}</label>
                    <br>
                    <span style="width: 90%; margin-left: 10px;">{{ $item->BinhLuan }}</span>
                    <br>
                </div>
                @endforeach
        </div>
        <div style="height: 20px"></div>

    </div>
</div>

@endsection