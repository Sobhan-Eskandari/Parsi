@extends('layouts.dashboard')

@section('content')


<div class="confPmsBox">
    <br><br>
    <div class="row">
        <div class="col-xs-12 table_padding">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th><h4>پیام ها</h4></th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @component('components.pmsRowTable')
                    @slot('style')
                        background-color: #f4f4f4;
                    @endslot
                @endcomponent
                @component('components.pmsRowTable')
                    @slot('style')
                    @endslot
                @endcomponent
                @component('components.pmsRowTable')
                    @slot('style')
                    @endslot
                @endcomponent
                @component('components.pmsRowTable')
                    @slot('style')
                    @endslot
                @endcomponent
                @component('components.pmsRowTable')
                    @slot('style')
                    @endslot
                @endcomponent
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

@section('badge')
    <span class="badge pull-left hidden-xs hidden-sm hidden-md">9</span>
@endsection