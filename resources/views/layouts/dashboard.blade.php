<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Dashboard</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="{{ asset('cssDashboard/application.css') }}">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('Resources/css-old/Font/font-awesome.min.css') }}">
    {{--<link rel="stylesheet" href="{{ asset('Resources/css/Font/fontiran.css') }}">--}}
</head>
<body>
<div class="container-fluid height_vh">
    <div class="row height_vh">
        <!--main box(white)-->
        <div class="col-xs-10 scroll_padding">
            <!--menu_bar-->
            <form>
                <div class="row menu_shadow">
                    <div class="col-xs-4 pull-right home_top">
                        <h4><a href="#" class="zhenic_menubar"><i class="fa fa-home" aria-hidden="true"></i>&nbsp;همایش</a>
                        </h4></div>
                    <div class="col-xs-4 pull-left exit_up">
                        <h4><a href="#" class="exit_menubar"><i class="fa fa-share-square-o" aria-hidden="true"></i>&nbsp;&nbsp;خروج</a>
                        </h4></div>
                    <div class="col-md-4 col-md-offset-0 col-xs-8 col-xs-offset-2"> &nbsp;</div>
                </div>
                <!--spline part-->
                <div class="scrollbar">
                    <div class="row">
                        <div class="col-xs-12 spline">&nbsp;</div>
                    </div>

                    @yield('content')


                </div>
            </form>
        </div>
        <!--sideBar-->
        <div class="col-xs-2 admin_sidebar pull-right">
            <h5 class="zhenic_title">همایش</h5>
            <h5 class="admin_side_title"><i class="fa fa-file-text-o set_fa pull-right" aria-hidden="true"></i><span
                        class="hidden-xs">پست ها</span></h5>
            <h5 class="admin_side_title"><i class="fa fa-address-card set_fa pull-right" aria-hidden="true"></i><span
                        class="hidden-xs">سخنرانان</span></h5>
            <h5 class="admin_side_title"><i class="fa fa-address-book set_fa pull-right" aria-hidden="true"></i><span
                        class="hidden-xs">کادر اجرایی</span> @yield('badge')</h5>
            <h5 class="admin_side_title"><i class="fa fa-comments set_fa pull-right" aria-hidden="true"></i><span
                        class="hidden-xs">پیام ها</span></h5>
            <h5 class="admin_side_title"><i class="fa fa-user set_fa pull-right" aria-hidden="true"></i><span
                        class="hidden-xs">پروفایل ادمین</span></h5>
            <h5 class="admin_side_title"><i class="fa fa-cogs set_fa pull-right" aria-hidden="true"></i><span
                        class="hidden-xs">تنظیمات</span></h5></div>
    </div>
</div>


{{--<script src="{{ asset('Resources/js/Jquery/jquery-3.2.0.min.js') }}"></script>--}}
<script src="{{ asset('Resources/js-old/Jquery/jquery-2.1.4.min.js') }}"></script>
<script src="{{ asset('Resources/js-old/Bootstrap/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/dashboard.js') }}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBJXj14jwwsgwA1DeIRMY5jBiRwT_byxVs&callback=myMap"></script>

</body>
</html>
