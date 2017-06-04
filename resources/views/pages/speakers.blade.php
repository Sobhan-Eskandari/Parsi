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
                <label for="">نام سخنران</label>
                <input class="form-control" type="text" tabindex="1">
            </div>
            <div class="col-lg-5 col-xs-10 pull-right">
                <label for="">حرفه</label>
                <input class="form-control" type="text" tabindex="2">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-lg-8 col-xs-10 pull-right">
           <label>توضیحات</label>
         <textarea class="form-control" tabindex="3"></textarea>
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
                <button class="btn conf_button_upload ch-co-btn" type="submit">تایید</button>
            </div>
        </div>
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
                        <th>تاریخ</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                   @component('components.speakersRowTable')
                    @endcomponent
                   @component('components.speakersRowTable')
                   @endcomponent
                   @component('components.speakersRowTable')
                   @endcomponent
                   @component('components.speakersRowTable')
                   @endcomponent
                    </tbody>
                </table>

            </div>
        </div>


    </div>








@endsection