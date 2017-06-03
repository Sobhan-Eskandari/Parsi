@extends('layouts.dashboard')

@section('content')

    @component('components.errors') @endcomponent

    @component('components.flash') @endcomponent

    <div class="confSpeakersBox">
        <br><br>
        <div class="row">
            <div class="col-xs-12">
                <h3>سخنرانان</h3>
            </div>
        </div>
        <hr>
        <br>
        {!! Form::open(['method'=>'POST', 'action'=>'CrewController@store', 'files' => true]) !!}
        <div class="row">
            <div class="col-lg-3 col-xs-10 pull-right">
                <label for="">نام</label>
                <input name="name" class="form-control" type="text" tabindex="1">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-lg-1 col-md-6 col-md-10 pull-right">
                <button class="btn conf_button_upload" type="button">آپلود عکس</button>
            </div>
            <div class="col-lg-4 col-md-10 col-md-10 col-sm-10 col-xs-10 pull-right conf_button_upload_box">
                <button class="btn conf_button_upload_inside pull-right" type="button"></button>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-lg-1 col-md-6 col-md-10 pull-right">
                {!! Form::submit('تایید', ['class'=>'btn conf_button_upload ch-co-btn']) !!}
            </div>
        </div>
        {!! Form::close() !!}
        <br>
        <hr>
        <br>
        <div class="row">
            <div class="col-lg-5 col-xs-8 pull-right">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>نام</th>
                        <th>تاریخ</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($crews as $crew)
                        @component('components.staffRowTable')
                            @slot('id') {{ $crew->id }} @endslot
                            @slot('name') {{ $crew->name }} @endslot
                            @slot('date') {{ $crew->created_at->format('y/m/d') }} @endslot
                        @endcomponent
                    @endforeach
                    </tbody>
                    {{ $crews->links() }}
                </table>

            </div>
        </div>


    </div>



@endsection

@section('crews')
    active
@endsection