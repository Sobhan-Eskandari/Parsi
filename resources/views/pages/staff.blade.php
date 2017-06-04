@extends('layouts.dashboard')

@section('content')

    <div class="confSpeakersBox">
        <br><br>
        <div class="row">
            <div class="col-xs-12">
                <h3>سخنرانان</h3>
            </div>
        </div>
        <hr>
        <br>
        <div class="row">
            <div class="col-lg-3 col-xs-10 pull-right">
                <label for="">نام</label>
                <input class="form-control" type="text" tabindex="1">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-lg-11 col-md-6 col-md-11 pull-right">
                <div class="custom-file-upload">
                    <!--<label for="file">File: </label>-->
                    <input type="file" id="file" name="myfiles[]" multiple />
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-lg-1 col-md-6 col-md-10 pull-right">
                <button class="btn conf_button_upload ch-co-btn" type="button">تایید</button>
            </div>
        </div>
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
                    @component('components.staffRowTable')
                    @endcomponent
                    @component('components.staffRowTable')
                    @endcomponent
                    @component('components.staffRowTable')
                    @endcomponent
                    @component('components.staffRowTable')
                    @endcomponent
                    </tbody>
                </table>

            </div>
        </div>


    </div>



@endsection