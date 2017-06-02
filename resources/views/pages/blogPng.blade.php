@extends('layouts.blog')

@section('content')
    <div class="container-fluid px-0">
        <div class="second-header">
            <h1 class="text-center main-title-layout pr-1">وبلاگ</h1>
        </div>
    </div>
    <br><br>
    <div class="container blogPngBox">
        <div class="row justify-content-center javaComponent">
            @for ($i = 0; $i < 4; $i++)
                @component('components.java')
                    @slot('style')
                        color:black;
                    @endslot
                @endcomponent
            @endfor
        </div>
        <br>
        <div class="row justify-content-center javaComponent">
            @for ($i = 0; $i < 4; $i++)
                @component('components.java')
                    @slot('style')
                        color:black;
                    @endslot
                @endcomponent
            @endfor
        </div>
        <br>
        <div class="row justify-content-center javaComponent">
            @for ($i = 0; $i < 4; $i++)
                @component('components.java')
                    @slot('style')
                        color:black;
                    @endslot
                @endcomponent
            @endfor
        </div>
        <div class="row mt-5 justify-content-center pBox">
            <nav aria-label="Page navigation example justify-content-center">
                <ul class="pagination">

                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-double-right"
                                                                           aria-hidden="true"></i>
                        </a></li>

                </ul>
            </nav>
        </div>

    </div>

    <br><br>

@endsection