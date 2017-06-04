<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>@yield('title')</title>

    <script src="//cdn.ckeditor.com/4.6.1/full/ckeditor.js"></script>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="{{ asset('cssDashboard/application.css') }}">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('Resources/css-old/Font/font-awesome.min.css') }}">
    {{--<link rel="stylesheet" href="{{ asset('Resources/css/Font/fontiran.css') }}">--}}
    <script src="https://cdn.ckeditor.com/4.7.0/standard/ckeditor.js"></script>
</head>
<body>
<div class="container-fluid height_vh">
    <div class="row height_vh">
        <!--main box(white)-->
        <div class="col-xs-10 scroll_padding">
            <!--menu_bar-->
                <div class="row menu_shadow">
                    <div class="col-xs-4 pull-right home_top">
                        <h4><a href="{{ route('home') }}" class="zhenic_menubar"><i class="fa fa-home" aria-hidden="true"></i>&nbsp;همایش</a>
                        </h4></div>
                    <div class="col-xs-4 pull-left exit_up">
                        <a href="{{ url('/logout') }}"
                           onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                            <h4><i class="fa fa-share-square-o" aria-hidden="true"></i>&nbsp;خروج</h4>
                        </a>
                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </div>
                    {{--<div class="col-xs-4 pull-left exit_up">--}}
                        {{----}}
                        {{--<h4><a href="#" class="exit_menubar"><i class="fa fa-share-square-o" aria-hidden="true"></i>&nbsp;&nbsp;خروج</a>--}}
                        {{--</h4></div>--}}
                    <div class="col-md-4 col-md-offset-0 col-xs-8 col-xs-offset-2"> &nbsp;</div>
                </div>
                <!--spline part-->
                <div class="scrollbar">
                    <div class="row">
                        <div class="col-xs-12 spline">&nbsp;</div>
                    </div>

                    @yield('content')


                </div>
        </div>
        <!--sideBar-->
        <div class="col-xs-2 admin_sidebar pull-right">


            <a href="{{ route('home') }}"><h5 class="zhenic_title">همایش</h5></a>

            <a href="{{ route('posts.index') }}"><h5 class="admin_side_title @yield('posts')"><i class="fa fa-file-text-o set_fa pull-right" aria-hidden="true"></i><span class="hidden-xs">پست ها</span></h5></a>

            <a href="{{ route('lecturers.index') }}"><h5 class="admin_side_title @yield('lecturers')"><i class="fa fa-address-card set_fa pull-right" aria-hidden="true"></i><span class="hidden-xs">سخنرانان</span></h5></a>

            <a href="{{ route('crews.index') }}"><h5 class="admin_side_title @yield('crews')"><i class="fa fa-address-book set_fa pull-right" aria-hidden="true"></i><span class="hidden-xs">کادر اجرایی</span></h5></a>

            <a href="{{ route('messages.index') }}"><h5 class="admin_side_title @yield('messages')"><i class="fa fa-comments set_fa pull-right" aria-hidden="true"></i><span class="hidden-xs">پیام ها</span> <span class="badge pull-left hidden-xs hidden-sm hidden-md">{{ \App\Message::whereRead(0)->count() }}</span></h5></a>

            <a href="{{ route('admin.index') }}"><h5 class="admin_side_title @yield('admin')"><i class="fa fa-user set_fa pull-right" aria-hidden="true"></i><span class="hidden-xs">پروفایل ادمین</span></h5></a>

            <a href="{{ route('settings.index') }}"><h5 class="admin_side_title @yield('settings')"><i class="fa fa-cogs set_fa pull-right" aria-hidden="true"></i><span class="hidden-xs">تنظیمات</span></h5></a>

        </div>

    </div>
</div>

<script src="{{ asset('Resources/js-old/Jquery/jquery-2.1.4.min.js') }}"></script>
<script src="{{ asset('Resources/js-old/Bootstrap/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/dashboard.js') }}"></script>
@yield('map')


</body>
</html>
