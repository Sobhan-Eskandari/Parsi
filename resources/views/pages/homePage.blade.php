<!doctype html>
<html lang="fa" dir="rtl" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Conferences</title>
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="{{ asset('Resources/css/Bootstrap/bootstrap.min.css') }}">

    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="{{ asset('css/application.css') }}">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('Resources/css/Font/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('Resources/css/Font/fontiran.css') }}">
</head>
<body>

{{--==========[ Header ]========= --}}
<div class="container-fluid px-0">
    <header>
        <br>
        <div class="mainConferencesNavbar">
            <nav class="navbar navbar-toggleable-md navbar-light">
                <button class="navbar-toggler navbar-toggler-left mt-2" type="button" data-toggle="collapse"
                        data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
                        aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand mr-lg-4 pr-lg-5" href="#">
                    <span><img src="{{ asset('images/parsi.png') }}" alt="در حال بارگذاری" height="50px"
                               width="55px"></span>
                    کنسرسیوم پارسی
                </a>

                <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                    <ul class="navbar-nav mr-md-auto ml-md-auto mt-3 mt-md-0">
                        <li class="nav-item">
                            <a class="nav-link" href="#">درباره همایش<span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">درباره رویداد</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">جوایز</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">سخنرانان</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">بلاگ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">حامیان</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">درباره ما</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">تماس با ما</a>
                        </li>
                    </ul>
                    <form class="form-inline my-2 my-lg-0 pl-lg-5 ml-lg-4">
                        <button class="btn btn-primary my-2 my-sm-0 px-3 loginButton" type="submit">تهیه بلیط</button>
                    </form>
                </div>
            </nav>
        </div>
        <div class="container">
            <h3 class="text-center subjectConfH2">۱۵ شهریور ۱۳۹۶</h3>
        </div>
        <div class="container mt-4">
            <h2 class="text-center subjectConfH1">همایش بزرگ از ایده تا اجرا</h2>
        </div>
        <div class="container mt-5">
            <h1 class="text-center counter_number">
                <span class="counter_second px-lg-3 px-md-3">25</span>
                <span class="counter_min px-lg-3 px-md-3">25</span>
                <span class="counter_hour px-lg-3 px-md-3">40</span>
                <span class="counter_day px-lg-3 px-md-3">30</span>
            </h1>
        </div>
        <div class="container">
            <h5 class="text-center counter_day">
                <span class="counter_second pr-lg-3  pl-lg-4 pr-md-3  pl-md-4 px-sm-3">ثانیه</span>
                <span class="counter_min pr-lg-4 pl-lg-3 pr-md-4 pl-md-3 px-sm-3">دقیقه</span>
                <span class="counter_hour pr-lg-4 pl-lg-4 pr-md-4 pl-md-4 px-sm-3">ساعت</span>
                <span class="counter_day pr-lg-4 pl-lg-4 pr-md-4 pl-md-4 px-sm-3">روز</span>
            </h5>
        </div>
        <div class="container mt-5 pt-5">
            <div class="row">
                <div class="col-1"></div>
                <div class="col-2">
                    <hr class="hr-right">
                </div>
                <div class="col-6 px-0">
                    <h5 class="text-center header_address px-0">
                        گیلان-کلاچای-واجارگاه-دانشکده فنی مهندسی شرق گیلان
                    </h5>
                </div>
                <div class="col-2">
                    <hr class="hr-left">
                </div>
                <div class="col-1"></div>
            </div>
        </div>
        <br><br><br><br>
    </header>
</div>
{{--==========[ about conf ]========= --}}
<div class="container aboutConf mb-5 pb-3">
    <div class="row pt-5 mt-5">
        <div class="col-lg-3 col-xs-12 mr-md-auto ml-md-auto">
            <img src="{{ asset('images/parsi.png') }}" alt="در حال بارگذاری" height="200px"
                 width="210px" class="mb-md-5 mb-sm-5 mx-sm-auto d-block mt-4">
        </div>
        <br>
        <div class="col-lg-9 col-xs-12 pr-lg-5">
            <h5>درباره همایش</h5>
            <p class="mt-4 pl-lg-3">
                هاکاتوریسم یک ماراتن برنامه‌نویسی است که شرکت کنندگان در آن به صورت تیمی و یا انفرادی(توسعه‌دهنده)
                شرکت می‌کنند
                و از چهارشنبه تا جمعه عصر فرصت دارند تا با چالش‌های حوزه گردشگری که در ابتدای رویداد مطرح می‌شود،
                نرم‌افزار یا وب‌سایت خود را طراحی کنند. روز جمعه عصر هم داوران
                به بررسی کار تیم‌ها می‌پردازند و در مراسم اختتامیه برندگان معرفی می‌شوند.
                گر سابقه‌ی‌ فعالیت تیمی بر روی یک استارتاپ تحت وب و یا نرم‌افزار موبایلی اندرویدی / iOS را داشته‌اید
                و حتی علاقمند به شروع یک پروژه هستید، می‌توانید در این رویداد ثبت نام کنید.

            </p>
            <div class="row">
                <div class="col-12 mt-3 px-sm-0">
                    <button type="button" class="btn btn-primary my-1">تهیه بلیط</button>
                    <button type="button" class="btn btn-outline-success mr-lg-5 my-1">اطلاعات بیشتر</button>
                </div>
            </div>
        </div>
    </div>
</div>
{{--==========[ mack book row ]========= --}}
<div class="container-fluid  mackBookImageBox">
    <div class="row justify-content-center">
        <div class="col-6">
            <img src="{{ asset('images/macbook.png') }}" alt="" class="mx-auto d-block  img-fluid"
                 width="440px" height="300px">
        </div>
    </div>
</div>
{{--==========[ black about conf ]========= --}}
<div class="container-fluid blackBackAboutConf py-5">
    <div class="row justify-content-center">
        <div class="col-9">
            <p class="text-center mt-5">
                هاکاتوریسم یک ماراتن برنامه‌نویسی است که شرکت کنندگان در آن به صورت تیمی و یا انفرادی(توسعه‌دهنده)
                شرکت می‌کنند
                و از چهارشنبه تا جمعه عصر فرصت دارند تا با چالش‌های حوزه گردشگری که در ابتدای رویداد مطرح می‌شود،
                نرم‌افزار یا وب‌سایت خود را طراحی کنند. روز جمعه عصر هم داوران به بررسی کار تیم‌ها می‌پردازند و در
                مراسم
                اختتامیه برندگان معرفی می‌شوند.
                اگر سابقه‌ی‌ فعالیت تیمی بر روی یک استارتاپ تحت وب و یا نرم‌افزار موبایلی اندرویدی / iOS را
                داشته‌اید
                و حتی علاقمند به شروع یک پروژه هستید، می‌توانید در این رویداد ثبت نام کنید.

            </p>
        </div>
    </div>
    <br>
    <div class="row justify-content-center mb-3">
        <div class="col-3">
            <div class="row  justify-content-center">
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6 py-1">
                    <button type="button" class="btn btn-primary">تهیه بلیط</button>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6 py-1">
                    <button type="button" class="btn btn-outline-success">اطلاعات بیشتر</button>
                </div>
            </div>
        </div>
    </div>
</div>
{{--==========[ Present ]========= --}}
<div class="container pt-5 presentBox">
    <h4 class="text-center">جوایز برندگان</h4>
    <p class="text-center mt-3">جایزه نقدی تیمهای برتر از طرف کنسرسیوم توسعه پارسی و دانشگاه گیلان به برندگان تعلق خواهد
        گرفت</p>
    <hr>
    <div class="row justify-content-center my-5 py-3">
        <div class="col-4 px-0">
            <img src="{{ asset('images/thirdCup.png') }}" alt="" class="img-fluid thirdCupImg float-left">
        </div>
        <div class="col-4 px-0 firstCumImgBox">
            <img src="{{ asset('images/firstCup.png') }}" alt="" class="img-fluid mx-auto d-block firstCumImg">
        </div>
        <div class="col-4 px-0 secondCupImgBox">
            <img src="{{ asset('images/secondCup.png') }}" alt="" class="img-fluid secondCupImg float-right">
        </div>
    </div>
</div>
{{--==========[ creative expreience ]========= --}}
<div class="container-fluid px-0">
    <div class="creativeExperience">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h4>"یک تجربه خلاقانه"</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8  col-sm-12">
                    <p>همایش بزرگ از ایده تا اجرا دانشکده فنی شرق گیلان</p>
                </div>
                <div class="col-lg-4 col-sm-12 pr-lg-5 pt-lg-0 pt-sm-3">
                    <button type="button" class="btn btn-primary mr-lg-5">تهیه بلیط</button>
                </div>
            </div>

        </div>
    </div>
</div>
{{--==========[ speaker conf ]========= --}}
<div class="container speakerConf">
    <h4 class="text-center mt-5">سخنرانان همایش</h4>
    <hr>
    <div class="row mt-5 pt-4">
        <div class="col-4">
            @component('components.speakers')
            @endcomponent
        </div>
        <div class="col-4">
            @component('components.speakers')
            @endcomponent
        </div>
        <div class="col-4">
            @component('components.speakers')
            @endcomponent
        </div>
    </div>
    <div class="row mt-5 pt-4 pb-4">
        <div class="col-4">
            @component('components.speakers')
            @endcomponent
        </div>
        <div class="col-4">
            @component('components.speakers')
            @endcomponent
        </div>
        <div class="col-4">
            @component('components.speakers')
            @endcomponent
        </div>
    </div>
</div>
<hr class="separate_hr">
<br>
{{--==========[ Executive cadre ]========= --}}
<div class="executiveCadre container">
    <h4 class="text-center mt-2">کادر اجرایی</h4>
    <hr>
    <div class="row justify-content-center mt-5 mb-5 pb-4">
        @for ($i = 0; $i < 8; $i++)
            @component('components.executiveCadre')
            @endcomponent
        @endfor
    </div>
</div>
{{--==========[ latest news ]========= --}}
<div class="container-fluid px-0">
    <div class="latestNews py-5">
        <h3 class="text-center">آخرین اخبار همایش</h3>
        <hr>
        <div class="container">
            <div class="row justify-content-center mt-5 pt-3">
                @for ($i = 0; $i < 4; $i++)
                    @component('components.java')
                    @endcomponent
                @endfor
            </div>
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-4 mt-5 text-center">
                    <button type="button" class="btn btn-primary">مشاهده بیشتر</button>
                </div>
            </div>
        </div>
    </div>
</div>
{{--==========[ supporters ]========= --}}
<div class="container supportersBox py-5">
    <h4 class="text-center">حامیان ویژه همایش</h4>
    <hr>
    <div class="row justify-content-center pt-5 pb-3">
        <div class="col-lg-2 col-md-2 col-sm-12">
            <img src="{{ asset('images/Horoof-Negar.png') }}" alt="" class="mx-auto d-block img-fluid"
                 width="190px" height="190px">
        </div>
        <div class="col-lg-2 col-md-2 col-sm-12">
            <img src="{{ asset('images/imagna.png') }}" alt="" class="mx-auto d-block img-fluid"
                 width="140px" height="140px">
        </div>
        <div class="col-lg-2 col-md-2  px-0 col-sm-12">
            <img src="{{ asset('images/paya.png') }}" alt="" class="mx-auto d-block img-fluid"
                 width="300px" height="300px">
        </div>
        <div class="col-lg-2 col-md-2 col-sm-12">
            <img src="{{ asset('images/parsilo-new.png') }}" alt="" class="mx-auto d-block img-fluid"
                 width="200px" height="200px">
        </div>
        <div class="col-lg-2 col-sm-12">
            <img src="{{ asset('images/sw.png') }}" alt="" class="mx-auto d-block img-fluid"
                 width="200px" height="200px">
        </div>
    </div>
    <hr class="lighter_hr">
    <h4 class="text-center pt-4">حامیان معنوی همایش</h4>
    <hr>
    <div class="row justify-content-center pt-5 pb-3">
        <div class="col-lg-2 col-md-2 col-sm-12">
            <img src="{{ asset('images/Horoof-Negar.png') }}" alt="" class="mx-auto d-block img-fluid"
                 width="190px" height="190px">
        </div>
        <div class="col-lg-2 col-md-2 col-sm-12">
            <img src="{{ asset('images/imagna.png') }}" alt="" class="mx-auto d-block img-fluid"
                 width="140px" height="140px">
        </div>
        <div class="col-lg-2 col-md-2  px-0 col-sm-12">
            <img src="{{ asset('images/paya.png') }}" alt="" class="mx-auto d-block img-fluid"
                 width="300px" height="300px">
        </div>
        <div class="col-lg-2 col-md-2 col-sm-12">
            <img src="{{ asset('images/parsilo-new.png') }}" alt="" class="mx-auto d-block img-fluid"
                 width="200px" height="200px">
        </div>
        <div class="col-lg-2 col-sm-12">
            <img src="{{ asset('images/sw.png') }}" alt="" class="mx-auto d-block img-fluid"
                 width="200px" height="200px">
        </div>
    </div>
</div>
{{--==========[ contact ]========= --}}

<div class="container-fluid px-0 contactWithUs py-5">
    <h4 class="text-center">تماس با ما</h4>
    <hr>
    <div class="container">
    <div class="row justify-content-center  mt-5">
            <div class="col-8">
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-6 col-sm-12 pl-lg-5 py-1">
                            <input type="text" class="form-control" placeholder="نام شما" tabindex="1">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 pr-lg-5 py-1">
                            <input type="email" class="form-control" placeholder="ایمیل شما" tabindex="2">
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-8">
                <div class="form-group pt-4">
                    <textarea class="form-control" rows="10" tabindex="3" placeholder="متن پیام"></textarea>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-4 mt-4 text-center">
                <button type="button" class="btn btn-primary">ارسال پیام</button>
            </div>
        </div>
    </div>
</div>
{{--==========[ map ]========= --}}
<div id="map"></div>
{{--==========[ footer ]========= --}}
<div class="container-fluid footer pt-5 pb-4">
<h5 class="text-center">همایش بزرگ از ایده تا اجرا</h5>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4 text-center mt-4">
                <a href="#"><i class="fa fa-instagram fa-2x" aria-hidden="true"></i></a>
                &nbsp;&nbsp;&nbsp;
                <a href="#"><i class="fa fa-paper-plane fa-2x" aria-hidden="true"></i></a>
            </div>
        </div>
    </div>
</div>
{{--==========[ strip ]========= --}}
<div class="container-fluid strip pt-3 pb-2">
    <h6 class="text-center">طراحی شده توسط تیم حروف نگار-کنسرسیوم پارسی-1396</h6>
</div>


<script src="{{ asset('Resources/js/Jquery/jquery-2.2.4.min.js') }}"></script>
<script src="{{ asset('Resources/js/Bootstrap/tether.min.js') }}"></script>
<script src="{{ asset('Resources/js/Bootstrap/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/public.js') }}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBJXj14jwwsgwA1DeIRMY5jBiRwT_byxVs&callback=myMap"></script>
</body>
</html>