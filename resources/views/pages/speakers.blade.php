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
        {!! Form::open(['method'=>'POST', 'action'=>'LecturerController@store', 'files' => true]) !!}


        <div class="row">
            <div class="col-lg-3 col-xs-10 pull-right">
                <label for="">نام سخنران</label>
                <input name="name" class="form-control" type="text" tabindex="1">
            </div>
            <div class="col-lg-5 col-xs-10 pull-right">
                <label for="">حرفه</label>
                <input name="profession" class="form-control" type="text" tabindex="2">
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
                    <!--<label for="file">File: </label>-->
                    <input type="file" id="file" name="myfiles[]" multiple />
                </div>
            </div>

        </div>
        <br>
        <div class="row">
            <div class="col-lg-1 col-md-6 col-md-10 pull-right">

                {!! Form::submit('تایید', ['class'=>'btn conf_button_upload ch-co-btn']) !!}

                <button class="btn conf_button_upload ch-co-btn" type="submit">تایید</button>

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
{{--                            @slot('desc') {{ str_limit($lecturer->desc, 50) }} @endslot--}}
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