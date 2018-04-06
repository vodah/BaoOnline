<!doctype html>
<html lang="en" class="fullscreen-bg">

<head>
    <title>Đăng nhập trang quản trị</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <!-- VENDOR CSS -->
    <link rel="stylesheet" href="{{asset('admin/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/assets/vendor/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/assets/vendor/linearicons/style.css')}}">
    <!-- MAIN CSS -->
    <link rel="stylesheet" href="{{asset('admin/assets/css/main.css')}}">
    <!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
    <link rel="stylesheet" href="{{asset('admin/assets/css/demo.css')}}">
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
    <!-- ICONS -->
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('admin/assets/img/apple-icon.png')}}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{asset('admin/assets/img/favicon.png')}}">
</head>

<body>
<!-- WRAPPER -->
<div id="wrapper">
    <div class="vertical-align-wrap">
        <div class="vertical-align-middle">
            <div class="auth-box ">
                <div class="left">
                    <div class="content">
                        <div class="header">
                            <!--                            <div class="logo text-center"><img src="assets/img/logo-dark.png" alt="Klorofil Logo"></div>-->
                            <p class="lead">Đăng nhập</p>
                        </div>
                        <form class="form-auth-small" action="{{route('login.post')}}" method="post" novalidate>
                            {{csrf_field()}}
                                <div class="form-group has-feedback">
                                @if(session('msg'))
                                <span class="text-danger">
                                {{ session('msg') }}
                                </span>
                                @endif
                                <div class="form-group">
                                    <label for="signin-email" class="control-label sr-only">Email</label>
                                    <input type="email" class="form-control" id="signin-email"
                                           placeholder="Nhập địa chỉ Email">
                                    @if(asset($errors->first('email')))
                                    <span class="text-danger">{{$errors->first('email')}}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="signin-password" class="control-label sr-only">Password</label>
                                    <input type="password" class="form-control" id="signin-password"
                                           placeholder="Nhập mật khẩu của bạn">
                                    @if(asset($errors->first('password')))
                                    <span class="text-danger">{{$errors->first('password')}}</span>
                                    @endif
                                </div>
                                <!--                            <div class="form-group clearfix">-->
                                <!--                                <label class="fancy-checkbox element-left">-->
                                <!--                                    <input type="checkbox">-->
                                <!--                                    <span>Remember me</span>-->
                                <!--                                </label>-->
                                <!--                            </div>-->
                                <button type="submit" class="btn btn-primary btn-lg btn-block">Đăng nhập</button>
                                <!--                            <div class="bottom">-->
                                <!--                                <span class="helper-text"><i class="fa fa-lock"></i> <a href="#">Forgot password?</a></span>-->
                                <!--                            </div>-->
                        </form>
                    </div>
                </div>
                <!--                <div class="right">-->
                <!--                    <div class="overlay"></div>-->
                <!--                    <div class="content text">-->
                <!--                        <h1 class="heading">Free Bootstrap dashboard template</h1>-->
                <!--                        <p>by The Develovers</p>-->
                <!--                    </div>-->
                <!--                </div>-->
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>
<!-- END WRAPPER -->
</body>

</html>
