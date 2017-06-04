@extends('layouts.blog')

@section('title')
    {{ $info->site_title }} | بلاگ
@endsection

@section('content')
    <div class="container-fluid px-0">
        <div class="second-header">
            <h1 class="text-center main-title-layout pr-1">وبلاگ</h1>
        </div>
    </div>
    <br><br>
    <div class="container blogPngBox">
        @foreach($posts as $post)
            @if($loop->first || $loop->iteration % 4 === 1)
                <div class="row justify-content-center javaComponent">
            @endif
                @component('components.java')
                    @slot('style') color:black; @endslot
                    @slot('id') {{ $post->id }} @endslot
                    @slot('photo') {{ $post->image }} @endslot
                    @slot('title') {{ $post->title }} @endslot
                    @slot('date') {{ $post->created_at->format('y/m/d') }} @endslot
                @endcomponent
            @if($loop->last || $loop->iteration % 4 === 0)
                </div>
                <br>
            @endif
        @endforeach
        <div class="row mt-5 justify-content-center pBox">
            <nav aria-label="Page navigation example justify-content-center">
                {{ $posts->links() }}
            </nav>
        </div>

    </div>

    <br><br>

@endsection

@section('blog_active')
    style="color: #00E2FF"
@endsection