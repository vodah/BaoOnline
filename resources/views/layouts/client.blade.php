<!doctype html>
<html lang="en">

<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">

    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('admin/assets/vendor/bootstrap/css/bootstrap.min.css')}}">

</head>
<body>
    <header>
        <div class="menu">
            <ul>
                <li class="li-menu"><a href="{{route('home.list')}}">Trang chủ</a></li>
                @foreach($tong as $item)
                @if($item->DanhMucCha == null)
                <li class="li-menu"><a href="{{$item->slug}}">{{$item->TenDanhMuc}}</a>
                </li>
                    @endif
                @endforeach
<!--                </li>-->
            </ul>
            <div class="tim-kiem">
                <form action="{{route('home.timkiem')}}" method="get" novalidate>
                    <input type="text" name="tim_kiem" class="input_timkiem" placeholder="Tìm kiếm">
                    <img style="    width: 15px;margin-left: -25px; margin-bottom: 4px;" src="{{ asset('/img/search.png') }}" alt="">
                </form>
            </div>
        </div>

    </header>

    <section>
        @yield('content')
    </section>


    <footer>
        <div class="footer">
            <div class="col-sm-6">
                <p></p>
                <div>
                    <p>Mọi thắc mắc xin liên hệ Hà Đào</p>
                </div>
                <div>
                    <p>Email: abc@test.com</p>
                </div>

                <div>
                    <p>Số điện thoại liên hệ: 0123456789</p>
                </div>
                <div>
                    <p>Mọi hành động sử dụng nội dung đăng tải trên trang này đều đã được kiểm duyệt</p>
                </div>
            </div>
            <div class="col-sm-6">

            </div>
        </div>
    </footer>



</body>
</html>