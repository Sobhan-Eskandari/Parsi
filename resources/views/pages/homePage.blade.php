<!doctype html>
<html lang="fa" dir="rtl" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="{{ $info->meta_description }}">
    <title>{{ $info->site_title }} | خانه</title>
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="{{ asset('Resources/css/Bootstrap/bootstrap.min.css') }}">
    <script src="{{ asset('Resources/js/Jquery/jquery-2.2.4.min.js') }}"></script>
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
            <nav class="navbar navbar-toggleable-md navbar-light fixed-top backScrollColor" id="backScrollColor">
                <button class="navbar-toggler navbar-toggler-left mt-2" type="button" data-toggle="collapse"
                        data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
                        aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand mr-lg-4 pr-lg-5" href="/">
                    <span><img src="{{ asset('images/parsi.png') }}" alt="در حال بارگذاری" height="50px"
                               width="55px"></span>
                    کنسرسیوم پارسی
                </a>

                <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                    <ul class="navbar-nav mr-md-auto ml-md-auto mt-3 mt-md-0">
                        <li class="nav-item">
                            <a class="nav-link" href="#aboutConfDown">درباره همایش<span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#aboutEventDown">درباره رویداد</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#presentDown">جوایز</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#speakerDown">سخنرانان</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('posts.all') }}">بلاگ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#supporterDown">حامیان</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('about_us') }}">درباره ما</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contactDown">تماس با ما</a>
                        </li>
                    </ul>
                    <form class="form-inline my-2 my-lg-0 pl-lg-5 ml-lg-4">
                        <a href="{{ $info->ticket_link }}"><button class="btn btn-primary my-2 my-sm-0 px-3 loginButton" type="button">تهیه بلیط</button></a>
                    </form>
                </div>
            </nav>
        </div>
        <div class="container">
            <br><br>
            <h3 class="text-center subjectConfH2">۱۵ شهریور ۱۳۹۶</h3>
        </div>
        <div class="container mt-4">
            <h2 class="text-center subjectConfH1">همایش بزرگ از ایده تا اجرا</h2>
        </div>
        <div class="container mt-5 clockBox">
            <div class="row justify-content-center">
            <div id="clockdiv" class="text-center col-5">
                <div>
                    <span class="days counter_day "></span>
                    <div class="smalltext counter_day ">روز</div>
                </div>
                <div>
                    <span class="hours counter_hour"></span>
                    <div class="smalltext counter_hour">ساعت</div>
                </div>
                <div>
                    <span class="minutes counter_min"></span>
                    <div class="smalltext counter_min">دقیقه</div>
                </div>
                <div>
                    <span class="seconds counter_second"></span>
                    <div class="smalltext counter_second ">ثانیه</div>
                </div>
            </div>

            </div>
        </div>
        <div class="container mt-5 pt-5">
            <div class="row">
                <div class="col-1"></div>
                <div class="col-2">
                    <hr class="hr-right">
                </div>
                <div class="col-6 px-0">
                    <h5 class="text-center header_address px-0">
                        {{ $info->address }}
                    </h5>
                </div>
                <div class="col-2">
                    <hr class="hr-left">
                </div>
                <div class="col-1" id="aboutConfDown"></div>
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

            <p class="mt-4 pl-lg-3" id="toShowConf"></p>
            <p id="tohideConf" hidden>{{ $info->about_conference }}</p>
            <script>
                $( document ).ready(function() {
                    $('#toShowConf').html($('#tohideConf').text());
                    $('#tohideConf').css("display","none")
                });
            </script>

            <div class="row">
                <div class="col-12 mt-3 px-sm-0" id="aboutEventDown">
                    <a href="{{ $info->ticket_link }}"><button type="button" class="btn btn-primary my-1">تهیه بلیط</button></a>
                    <a href="{{ $info->ticket_link }}"><button type="button" class="btn btn-outline-success mr-lg-5 my-1">اطلاعات بیشتر</button></a>
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
            <p class="text-center mt-5" id="toShowText"></p>
            <p id="tohideText" hidden>{{ $info->about_event }}</p>
            <script>
                $( document ).ready(function() {
                    $('#toShowText').html($('#tohideText').text());
                    $('#tohideText').css("display","none")
                });
            </script>
        </div>
    </div>
    <br>
    <div class="row justify-content-center mb-3">
        <div class="col-3">
            <div class="row  justify-content-center">
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6 py-1">
                    <a href="{{ $info->ticket_link }}"><button type="button" class="btn btn-primary">تهیه بلیط</button></a>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6 py-1" id="presentDown">
                    <a href="{{ $info->ticket_link }}"><button type="button" class="btn btn-outline-success">اطلاعات بیشتر</button></a>
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
                    <a href="{{ $info->ticket_link }}"><button type="button" class="btn btn-primary mr-lg-5">تهیه بلیط</button></a>
                </div>
            </div>
        </div>
        <div id="speakerDown"></div>
    </div>
</div>
{{--==========[ speaker conf ]========= --}}
<div class="container speakerConf">
    <h4 class="text-center mt-5">سخنرانان همایش</h4>
    <hr>

    @foreach($lecturers as $lecturer)
        @if($loop->first || $loop->iteration % 3 === 1)
            <div class="row mt-5 pt-4 pb-4">
        @endif
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                @component('components.speakers')
                    @slot('photo') {{ $lecturer->image }} @endslot
                    @slot('name') {{ $lecturer->name }} @endslot
                    @slot('profession') {{ $lecturer->profession }} @endslot
                    @slot('desc') {{ strip_tags($lecturer->desc) }} @endslot
                @endcomponent
            </div>
        @if($loop->last || $loop->iteration % 3 === 0)
            </div>
        @endif
    @endforeach
</div>
<hr class="separate_hr">
<br>
{{--==========[ Executive cadre ]========= --}}
<div class="executiveCadre container">
    <h4 class="text-center mt-2">کادر اجرایی</h4>
    <hr>
    <div class="row justify-content-center mt-5 mb-5 pb-4">
        @foreach($crews as $crew)
            @component('components.executiveCadre')
                @slot('photo') {{ $crew->image }} @endslot
                @slot('name') {{ $crew->name }} @endslot
            @endcomponent
        @endforeach
    </div>
</div>
{{--==========[ latest news ]========= --}}
<div class="container-fluid px-0">
    <div class="latestNews javaComponent py-5">
        <h3 class="text-center">آخرین اخبار همایش</h3>
        <hr>
        <div class="container">
            <div class="row justify-content-center mt-5 pt-3">
                @foreach($posts as $post)
                    @component('components.java')
                        @slot('style') @endslot
                        @slot('id') {{ $post->id }} @endslot
                        @slot('photo') {{ $post->image }} @endslot
                        @slot('title') {{ $post->title }} @endslot
                        @slot('date') {{ $post->created_at->format('y/m/d') }} @endslot
                    @endcomponent
                @endforeach
            </div>
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-4 mt-5 text-center" id="supporterDown">
                    <a href="{{ route('posts.all') }}"><button type="button" class="btn btn-primary">مشاهده بیشتر</button></a>
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
    <div id="contactDown"></div>
</div>
{{--==========[ contact ]========= --}}

<div class="container-fluid px-0 contactWithUs py-5">
    <h4 class="text-center">تماس با ما</h4>
    <hr>
    @component('components.errors') @endcomponent

    @component('components.flash') @endcomponent
    <div class="containe/r">
        {!! Form::open(['method'=>'POST', 'action'=>'MessageController@store']) !!}
            <div class="row justify-content-center  mt-5">
                <div class="col-8">
                    <div class="row justify-content-center">
                        <div class="col-lg-6 col-md-6 col-sm-12 pl-lg-5 py-1">
                            <input name="name" type="text" class="form-control" placeholder="نام شما" tabindex="1">
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 pr-lg-5 py-1">
                            <input name="email" type="email" class="form-control" placeholder="ایمیل شما" tabindex="2">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-8">
                    <div class="form-group pt-4">
                        <textarea name="message" class="form-control" rows="10" tabindex="3" placeholder="متن پیام"></textarea>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-4 mt-4 text-center">
                    <button type="submit" class="btn btn-primary">ارسال پیام</button>
                </div>
            </div>
        {!! Form::close() !!}
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
<script>
    function myMap() {
        let myCenter = new google.maps.LatLng({{ $info->latitude }} + 0, {{ $info->longitude }} + 0);
        let mapCanvas = document.getElementById("map");
        let mapOptions = {
            center: myCenter,
            zoom: 12,
            scrollwheel: false
        };
        let map = new google.maps.Map(mapCanvas, mapOptions);
        marker = new google.maps.Marker({
            position: myCenter,
            map: map
        });
    }
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBJXj14jwwsgwA1DeIRMY5jBiRwT_byxVs&callback=myMap"></script>
</body>
</html>