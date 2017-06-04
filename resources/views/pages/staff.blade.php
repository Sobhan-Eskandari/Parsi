@extends('layouts.dashboard')

@section('title')
    {{ implode(\App\Setting::get(['site_title'])->toArray()[0]) }} | کادر اجرایی
@endsection

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
                {!! Form::text('name', null, ['class' => 'form-control']) !!}
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-lg-11 col-md-6 col-md-11 pull-right">
                <div class="custom-file-upload">
                    <input type="file" id="file" name="image"/>
                </div>
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
                            @slot('photo') {{ $crew->image }} @endslot
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