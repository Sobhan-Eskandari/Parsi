@extends('layouts.blog')

@section('title')
    {{ $info->site_title }} | درباره ما
@endsection

@section('content')

    <div class="container-fluid px-0 pt-5">
        <br>
        <img src="{{ asset('images/' . '/' . $info->about_us_photo) }}" alt="" class="img-fluid third-header">
    </div>
    {{--==========[ about conf ]========= --}}
    <div class="container aboutConf mb-5 pb-3 px-5 aboutUsBlogBox">
        <div class="row pt-3 mt-5">
            <div class="col-lg-3 col-xs-12 mr-md-auto ml-md-auto">
                <img src="{{ asset('images/parsi.png') }}" alt="در حال بارگذاری" height="200px"
                     width="210px" class="mb-md-5 mb-sm-5 mx-sm-auto d-block mt-4">
            </div>
            <br>
            <div class="col-lg-9 col-xs-12 pr-lg-5">
                <h4 class="mt-4 confTitleBlog">کنسرسیوم توسعه فناوری اطلاعات پارسی</h4>
                <p class="mt-2 pl-lg-3" id="toShowText"></p>
                <p id="tohideText" hidden>{{ $info->about_us }}</p>
                <script>
                    $( document ).ready(function() {
                        $('#toShowText').html($('#tohideText').text());
                        $('#tohideText').css("display","none")
                    });
                </script>
            </div>
        </div>
    </div>
    {{--==========[ supporters ]========= --}}
    <div class="container-fluid aboutUsBlogBox_backColor">
    <div class="container supportersBox py-5 aboutUsBlogBox">
        <h4 class="text-center">اعضای کنسرسیوم پارسی</h4>
        <hr class="underline_member">
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
    </div>

@endsection

@section('about_us_active')
    style="color: #46B594"
@endsection