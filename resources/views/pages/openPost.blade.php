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
                    <img src="{{ asset('images/java.jpg') }}" class="img-fluid" width="674.5px" alt="{{ $post->title }}">
                @else
                    <img src="{{ asset('images' . '/' . $post->image) }}" class="img-fluid" width="674.5px" alt="{{ $post->title }}">
                @endif
            </div>
        </div>
        <br>
        <div class="row justify-content-center mt-3">
            <div class="col-lg-6 col-sm-8">
                <div class="row justify-content-between px-0">
                    <div class="col px-3">
                        <h5 class="text-right">{{ $post->title }}</h5>
                    </div>
                    <div class="col px-3">
                        <h6 class="text-left">نوشته شده در {{ $post->created_at->format('y/m/d') }}</h6>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-6 col-sm-8">
                <p class="mt-4" id="toShowText"></p>
                <p id="tohideText" hidden>{{ $post->body }}</p>
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
                <div class="row justify-content-between px-0">

                    <div class="col px-3">
                        <div class="row justify-content-start">
                            <div class="col-2 px-0">
                                <a href="http://www.facebook.com/sharer.php?u=http://parsi.dev/blog/{{ $post->id }}"><img src="{{ asset('images/facebook.png') }}"
                                                alt="در حال بارگذاری" width="40px" height="40px" class="img-fluid"></a>
                            </div>
                            <div class="col-2 px-0">
                                <a href="https://telegram.me/share/url?url=http://parsi.dev/blog/{{ $post->id }}"><img src="{{ asset('images/telegram.png') }}"
                                                                                                                   alt="در حال بارگذاری" width="40px" height="40px" class="img-fluid"></a>
                            </div>
                            <div class="col-2 px-0">
                                <a href="http://www.linkedin.com/shareArticle?mini=true&url=http://parsi.dev/blog/{{ $post->id }}"><img src="{{ asset('images/linkedin.png') }}"
                                                alt="در حال بارگذاری" width="40px" height="40px" class="img-fluid"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col px-3">
                        <a href="{{ route('posts.all') }}" class="link"><p class="text-left">بازگشت به بلاگ <i class="fa fa-long-arrow-left pt-2"
                                                                    aria-hidden="true"></i></p></a>
                    </div>
                </div>
            </div>
        </div>
        <br><br><br>

    </div>

@endsection

@section('blog_active')
    style="color: #00E2FF"
@endsection