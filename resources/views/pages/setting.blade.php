@extends('layouts.dashboard')

@section('content')

    {!! Form::model($setting , ['method'=>'PUT', 'action'=>['SettingController@update', $setting->id], 'files' => true]) !!}

        <div class="confSettingBox">
        <br><br>
        <div class="row">
            <div class="col-lg-4 col-md-10 col-sm-10 col-xs-10 pull-right">
                <div class="form-group">
                    <label class="conf_label_post"><big>عنوان سایت</big></label>

                    {!! Form::text('site_title', null, ['id' => 'sendMessageInput', 'class' => 'form-control sendMessageInput', 'tabindex' => '1']) !!}
                </div>

                    <input class="form-control sendMessageInput" type="text" id="sendMessageInput" tabindex="1"></div>

            </div>
            <div class="col-lg-8 col-md-6 col-md-10 pull-right 2nd-upload-button">
                <div class="custom-file-upload 2nd-upload-button">
                    <!--<label for="file">File: </label>-->
                    <input type="file" id="file" name="myfiles[]" multiple />
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-7 col-xs-10 pull-right text-center">
                <div class="form-group">
                    <label class="conf_label_post pull-right"><big>متاداده</big></label>
                    {!! Form::textarea('meta_description', null, ['class'=>'form-control metaData', 'rows'=>'2']) !!}
                </div>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-xs-12">
                <h3>تماس با ما</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6  col-xs-10 pull-right">
                <label><big>آدرس</big></label>
                {!! Form::text('address', null, ['class' => 'form-control']) !!}
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-lg-3 col-xs-10 pull-right">
                <label><big>پست الکترونیک</big></label>
                {!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'example@example.com']) !!}
            </div>
            <div class="col-lg-3 col-xs-10 pull-right">
                <label><big>شماره تماس</big></label>
                {!! Form::text('land_line', null, ['class' => 'form-control', 'placeholder' => '01333445566']) !!}
            </div>
            <div class="col-lg-3 col-xs-10 pull-right">
                <label><big>شماره موبایل</big></label>
                {!! Form::text('mobile', null, ['class' => 'form-control', 'placeholder' => '09111234455']) !!}
            </div>

        </div>
        <br>
        <div class="row">
            <div class="col-lg-3 col-xs-10 pull-right">
                <label><big>لینک بلیط</big></label>
                {!! Form::text('ticket_link', null, ['class' => 'form-control']) !!}
            </div>
            <div class="col-lg-3 col-xs-10 pull-right">
                <label><big>تلگرام</big></label>
                {!! Form::text('telegram', null, ['class' => 'form-control']) !!}
            </div>
            <div class="col-lg-3 col-xs-10 pull-right">
                <label><big>اینستاگرام</big></label>
                {!! Form::text('instagram', null, ['class' => 'form-control']) !!}
            </div>
        </div>
        <br>
        <hr>
        <div class="row">
            <div class="col-lg-1 col-xs-10 pull-right">
                <h4 class="aboutUsTitle">درباره ما</h4>
            </div>
            <div class="col-lg-8 col-xs-12 pull-right">
                <div class="custom-file-upload">
                    <!--<label for="file">File: </label>-->
                    <input type="file" id="file" name="myfiles[]" multiple />
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-lg-7 col-xs-10 pull-right">

                {!! Form::textarea('about_us', null, ['class' => 'form-control textEditor']) !!}
                <script>
                    CKEDITOR.replace( 'about_us',{
                        height: 150
                    } );
                </script>

                 <textarea class="form-control textEditor writeCreatePostBox"
                           tabindex="2"  name="postText1"></textarea>

            </div>
        </div>
        <br><br><br>
        <div class="row">
            <div class="col-lg-7 col-xs-10 pull-right">
                <label class="confTextAreaTable">درباره همایش:</label>

                {!! Form::textarea('about_conference', null, ['class' => 'form-control textEditor']) !!}
                <script>
                    CKEDITOR.replace( 'about_conference',{
                        height: 150
                    } );
                </script>

                <textarea class="form-control textEditor writeCreatePostBox"
                          tabindex="3"  name="postText2"></textarea>

            </div>
        </div>
        <br>
        <hr>
        <div class="row">
            <div class="col-lg-7 col-xs-10 pull-right">
                <label class="confTextAreaTable">درباره رویداد:</label>

                {!! Form::textarea('about_event', null, ['class' => 'form-control textEditor']) !!}
                <script>
                    CKEDITOR.replace( 'about_event',{
                        height: 150
                    } );
                </script>

                <textarea class="form-control textEditor writeCreatePostBox"
                          tabindex="4"  name="postText3"></textarea>

            </div>
        </div>
        <br>
        <hr>
        <!-----google map----->
        <br>
        <div class="row">
            <div class="col-xs-12">
                <h4>آدرس را روی نقشه مشخص کنید:</h4>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-xs-7 pull-right" id="map">
            </div>

            <div class="col-xs-5">
                <div class="row">
                    <div class="form-group pull-right">
                        {!! Form::text('latitude', null, ['id'=>'lat', 'class'=>'form-control inputWidth', 'style' => 'display:none']) !!}
                    </div>
                </div>

                <div class="row">
                    <div class="form-group pull-right">
                        {!! Form::text('longitude', null, ['id'=>'lng', 'class'=>'form-control inputWidth', 'style' => 'display:none']) !!}
                    </div>
                </div>

                <div class="row">&nbsp;</div>
                <div class="row">
                    @if(!is_null($setting->latitude))
                        <button class="btn add_btn" id="addMarker" style="display: none">اضافه کردن به نقشه</button>
                    @else
                        <button class="btn add_btn" id="addMarker">اضافه کردن به نقشه</button>
                    @endif
                </div>
                <br>
                <div class="row">
                    @if(is_null($setting->latitude))
                        <button class="btn remove_btn" id="deleteMarker" style="display: none">حذف کردن از نقشه</button>
                    @else
                        <button class="btn remove_btn" id="deleteMarker">حذف کردن از نقشه</button>
                    @endif
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
                {!! Form::submit('ایجاد تغییرات', ['class'=>'btn pull-right conf_make_setting_btn']) !!}
            </div>
        </div>
        <br><br><br>
    </div>
    <script>
        CKEDITOR.replace('postText1');
        CKEDITOR.replace('postText2');
        CKEDITOR.replace('postText3');
    </script>

    {!! Form::close() !!}

@endsection

@section('map')
    {{--<script>--}}

        {{--var myCenter = new google.maps.LatLng(37.062914807102906,50.423115491867065);--}}
        {{--var mapCanvas = document.getElementById("map");--}}
        {{--var mapOptions = {center: myCenter, zoom: 12};--}}
        {{--var map = new google.maps.Map(mapCanvas, mapOptions);--}}
        {{--marker = new google.maps.Marker({--}}
            {{--position: myCenter,--}}
            {{--map: map--}}
        {{--});--}}
    {{--</script>--}}
{{--    <script src="{{ asset('js/map.js') }}"></script>--}}
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBJXj14jwwsgwA1DeIRMY5jBiRwT_byxVs&callback=myMap"></script>
@endsection

@section('settings')
    active
@endsection