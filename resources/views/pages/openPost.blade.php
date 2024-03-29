@extends('layouts.blog')

@section('title')
    {{ $info->site_title }} | {{ $post->title }}
@endsection

@section('content')
    <br>
    <div class="container-fluid openPost mt-5 pt-5">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-sm-8">
                @if(strlen($post->image) === 0)
                    <img src="{{ asset('images/java.jpg') }}" class="img-fluid"  alt="{{ $post->title }}" width="100%">
                @else
                    <img src="{{ asset('images' . '/' . $post->image) }}" class="img-fluid" alt="{{ $post->title }}" width="100%">
                @endif
            </div>
        </div>
        <br>
        <div class="row justify-content-center mt-3">
            <div class="col-lg-6 col-sm-8">
                <div class="row justify-content-between px-2">
                    <div class="col px-3">
                        <h5 class="text-right">{{ $post->title }}</h5>
                    </div>
                    <div class="col px-3">
                        <h6 class="text-left pl-1">نوشته شده در {{ $post->created_at->format('y/m/d') }}</h6>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-6 col-sm-8  px-2">
                <p class="mt-4 px-3" id="toShowText"></p>
                <p id="tohideText" hidden class="px-3">{{ $post->body }}</p>
                <script>
                    $( document ).ready(function() {
                        $('#toShowText').html($('#tohideText').text());
                        $('#tohideText').css("display","none")
                    });
                </script>
            </div>
        </div>
        <br>
        <div class="row justify-content-center mt-3">
            <div class="col-lg-6 col-sm-8">
                <div class="row justify-content-between px-2">

                    <div class="col px-3">
                        <div class="row justify-content-start">
                            <div class="col-2 px-0 text-left">
                                <a href="http://www.facebook.com/sharer.php?u=http://tabtek.ir/blog/{{ $post->id }}"><img src="{{ asset('images/facebook.png') }}"
                                                alt="در حال بارگذاری" width="40px" height="40px" class="img-fluid"></a>
                            </div>
                            <div class="col-2 px-0 text-center">
                                <a href="https://telegram.me/share/url?url=http://tabtek.ir/blog/{{ $post->id }}"><img src="{{ asset('images/telegram.png') }}"
                                                                                                                   alt="در حال بارگذاری" width="40px" height="40px" class="img-fluid"></a>
                            </div>
                            <div class="col-2 px-0 text-right">
                                <a href="http://www.linkedin.com/shareArticle?mini=true&url=http://tabtek.ir/blog/{{ $post->id }}"><img src="{{ asset('images/linkedin.png') }}"
                                                alt="در حال بارگذاری" width="40px" height="40px" class="img-fluid"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col px-3">
                        <a href="{{ route('posts.all') }}" class="link"><p class="text-left pl-1">بازگشت به بلاگ <i class="fa fa-long-arrow-left pt-2"
                                                                    aria-hidden="true"></i></p></a>
                    </div>
                </div>
            </div>
        </div>
        <br><br><br>

    </div>

@endsection

@section('blog_active')
    style="color: #46B594"
@endsection