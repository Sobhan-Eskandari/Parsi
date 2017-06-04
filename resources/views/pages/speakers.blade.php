@extends('layouts.dashboard')

@section('title')
    {{ implode(\App\Setting::get(['site_title'])->toArray()[0]) }} | سخنرانان
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
        {!! Form::open(['method'=>'POST', 'action'=>'LecturerController@store', 'files' => true]) !!}


        <div class="row">
            <div class="col-lg-3 col-xs-10 pull-right">
                <label for="">نام سخنران</label>
                {!! Form::text('name', null, ['class' => 'form-control']) !!}
            </div>
            <div class="col-lg-5 col-xs-10 pull-right">
                <label for="">حرفه</label>
                {!! Form::text('profession', null, ['class' => 'form-control']) !!}
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-lg-8 col-xs-10 pull-right">
           <label>توضیحات</label>
                {!! Form::textarea('desc') !!}
                <script>
                    CKEDITOR.replace( 'desc',{
                        height: 150
                    } );
                </script>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-lg-11 col-md-6 col-md-12 pull-right">
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
            <div class="col-lg-6 col-xs-10 pull-right">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>نام</th>
                        <th>حرفه</th>
                        {{--<th>توضیحات</th>--}}
                        <th>تاریخ</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($lecturers as $lecturer)
                        @component('components.speakersRowTable')
                            @slot('id') {{ $lecturer->id }} @endslot
                            @slot('name') {{ $lecturer->name }} @endslot
                            @slot('profession') {{ $lecturer->profession }} @endslot
                            @slot('photo') {{ $lecturer->image }} @endslot
                            @slot('date') {{ $lecturer->created_at->format('y/m/d') }} @endslot
                        @endcomponent
                    @endforeach
                    </tbody>
                    {{ $lecturers->links() }}
                </table>

            </div>
        </div>


    </div>

@endsection

@section('lecturers')
    active
@endsection