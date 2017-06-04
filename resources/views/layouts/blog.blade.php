<!doctype html>
<html lang="fa" dir="rtl" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="{{ $info->meta_description }}">
    <title>@yield('title')</title>
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="{{ asset('Resources/css/Bootstrap/bootstrap.min.css') }}">

    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="{{ asset('css/application.css') }}">
    <script src="{{ asset('Resources/js/Jquery/jquery-2.2.4.min.js') }}"></script>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('Resources/css/Font/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('Resources/css/Font/fontiran.css') }}">
</head>
<body>

{{--==========[ Header ]========= --}}

<div class="container-fluid px-0">
    <header>
        <div class="mainConferencesNavbar">
            <nav class="navbar navbar-toggleable-md navbar-light fixed-top blogColor">
                <button class="navbar-toggler navbar-toggler-left mt-2" type="button" data-toggle="collapse"
                        data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
                        aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand mr-lg-4 pr-lg-5" href="{{ route('home') }}">
                    <span><img src="{{ asset('images/parsi.png') }}" alt="در حال بارگذاری" height="50px"
                               width="55px"></span>
                    کنسرسیوم پارسی
                </a>

                <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                    <ul class="navbar-nav mr-md-auto ml-md-auto mt-3 mt-md-0">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('home') . '#aboutConfDown' }}">درباره همایش<span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('home') . '#aboutEventDown' }}">درباره رویداد</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('home') . '#presentDown' }}">جوایز</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('home') . '#speakerDown' }}">سخنرانان</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" @yield('blog_active') href="{{ route('posts.all') }}">بلاگ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('home') . '#supporterDown' }}">حامیان</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" @yield('about_us_active') href="{{ route('about_us') }}">درباره ما</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('home') . '#contactDown' }}">تماس با ما</a>
                        </li>
                    </ul>
                    <form class="form-inline my-2 my-lg-0 pl-lg-5 ml-lg-4">
                        <a href="{{ $info->ticket_link }}"><button class="btn btn-primary my-2 my-sm-0 px-3 loginButton" type="button">تهیه بلیط</button></a>
                    </form>
                </div>
            </nav>
        </div>
    </header>
</div>

@yield('content')

{{--==========[ footer ]========= --}}
<div class="container-fluid footer pt-5 pb-4">
    <h5 class="text-center">همایش بزرگ از ایده تا اجرا</h5>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4 text-center mt-4">
                <a href="{{ $info->instagram }}"><i class="fa fa-instagram fa-2x" aria-hidden="true"></i></a>
                &nbsp;&nbsp;&nbsp;
                <a href="{{ $info->telegram }}"><i class="fa fa-paper-plane fa-2x" aria-hidden="true"></i></a>
            </div>
        </div>
    </div>
</div>
{{--==========[ strip ]========= --}}
<div class="container-fluid strip pt-3 pb-2">
    <h6 class="text-center">طراحی شده توسط تیم حروف نگار - کنسرسیوم پارسی - {{  jDate::forge('now')->format('Y') }}</h6>
</div>


<script src="{{ asset('Resources/js/Jquery/jquery-2.2.4.min.js') }}"></script>
<script src="{{ asset('Resources/js/Bootstrap/tether.min.js') }}"></script>
<script src="{{ asset('Resources/js/Bootstrap/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/public.js') }}"></script>
</body>
</html>
