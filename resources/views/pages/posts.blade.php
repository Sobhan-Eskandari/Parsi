@extends('layouts.dashboard')

@section('content')

    @component('components.flash') @endcomponent

    <div class="confPostBox">

        <!-----------table------------>
        <br><br>
        <div class="row margin_right_2nd_title">
            <div class="col-md-3 col-md-offset-0 col-xs-6 pull-left">

                <a href="{{ route('posts.create') }}"><button class="btn adv_btn pull-left">ایجاد پست&nbsp;<i class="fa fa-plus" aria-hidden="true"></i></button></a>

                <button class="btn adv_btn pull-left"><a href="/makePost">ایجاد پست&nbsp;</a><i class="fa fa-plus" aria-hidden="true"></i>
                </button>

            </div>
            <div class="col-md-3 col-md-offset-0 col-xs-6 pull-right">
                <h4 class="list_title">لیست پست ها</h4>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-xs-12 table_padding">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>عنوان پست</th>
                        <th>متن پست</th>
                        <th>تاریخ ایجاد</th>
                        <th>&nbsp;</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($posts as $post)
                        @component('components.postRowTable')
                            @slot('id') {{ $post->id }} @endslot
                            @slot('title') {{ $post->title }} @endslot
                            @slot('body') {{ str_limit($post->body, 50) }} @endslot
                            @slot('date') {{ $post->created_at->format('y/m/d') }} @endslot
                        @endcomponent
                    @endforeach
                    </tbody>
                </table>

            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 col-lg-offset-0 col-md-8 col-md-offset-0 col-xs-11 col-xs-offset-0 padding_pagination">
                {{ $posts->links() }}
            </div>
        </div>
    </div>

@endsection

@section('posts')
    active
@endsection