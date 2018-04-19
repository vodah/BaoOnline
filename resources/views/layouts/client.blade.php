<!doctype html>
<html lang="en">

<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">

    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>
    <header>
        <div class="menu">
            <ul>
                <li class="li-menu"><a href="{{route('home.list')}}">Trang chủ</a></li>
                @foreach($danhmuc as $item)
                <li class="li-menu"><a href="{{$item->slug}}">{{$item->TenDanhMuc}}</a>
                </li>
                @endforeach
            </ul>
        </div>

    </header>



</body>
</html>