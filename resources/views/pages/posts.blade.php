@extends('layouts.dashboard')

@section('content')

    <div class="confPostBox">

        <!-----------table------------>
        <br><br>
        <div class="row margin_right_2nd_title">
            <div class="col-md-3 col-md-offset-0 col-xs-6 pull-left">
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
                    @for ($i = 0; $i < 8; $i++)
                        @component('components.postRowTable')
                        @endcomponent
                    @endfor
                    </tbody>
                </table>

            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 col-lg-offset-0 col-md-8 col-md-offset-0 col-xs-11 col-xs-offset-0 padding_pagination">
                <ul class="pagination">

                    <li class="activate_pag"><a href="#">1</a></li>
                    <li class="activate_pag"><a class="active" href="#">2</a></li>
                    <li class="activate_pag"><a href="#">3</a></li>
                    <li class="activate_pag"><a href="#">4</a></li>
                    <li class="activate_pag"><a href="#">50</a></li>

                </ul>
            </div>
        </div>
    </div>

@endsection