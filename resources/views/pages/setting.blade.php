@extends('layouts.dashboard')

@section('content')

    @component('components.errors') @endcomponent

    @component('components.flash') @endcomponent

    {!! Form::model($setting , ['method'=>'PUT', 'action'=>['SettingController@update', $setting->id], 'files' => true]) !!}

        <div class="confSettingBox">
        <br><br>
        <div class="row">
            <div class="col-lg-4 col-md-10 col-sm-10 col-xs-10 pull-right">
                <div class="form-group">
                    <label class="conf_label_post"><big>عنوان سایت</big></label>
                    {!! Form::text('site_title', null, ['id' => 'sendMessageInput', 'class' => 'form-control sendMessageInput', 'tabindex' => '1']) !!}
                </div>
            </div>
            <div class="col-lg-1 col-md-6 col-md-10 pull-right">
                <button class="btn conf_button_upload" type="button">فوآیکون<i class="fa fa-plus"
                                                                               aria-hidden="true"></i></button>
            </div>
            <div class="col-lg-4 col-md-10 col-md-10 col-sm-10 col-xs-10 pull-right">
                <button class="btn conf_button_upload_inside pull-right" type="button"></button>
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
            <div class="col-lg-1 col-xs-10 pull-right">
                <button class="btn conf_button_upload" type="button">آپلود عکس<i class="fa fa-plus"
                                                                                 aria-hidden="true"></i></button>
            </div>
            <div class="col-lg-5 col-xs-10 pull-right button_upload_box">
                <button class="btn conf_button_upload_inside pull-right" type="button"></button>
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
                        {!! Form::text('latitude', null, ['id'=>'lat', 'class'=>'form-control inputWidth', 'style' => 'display:none', 'readonly']) !!}
                    </div>
                </div>

                <div class="row">
                    <div class="form-group pull-right">
                        {!! Form::text('longitude', null, ['id'=>'lng', 'class'=>'form-control inputWidth', 'style' => 'display:none', 'readonly']) !!}
                    </div>
                </div>

                <div class="row">&nbsp;</div>
                <div class="row">
                    <button class="btn add_btn" id="addMarker" style="display: none">اضافه کردن به نقشه</button>
                </div>
                <br>
                <div class="row">
                    <button class="btn remove_btn" id="deleteMarker">حذف کردن از نقشه</button>
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

    {!! Form::close() !!}

@endsection

@section('map')
    <script>

        let lat = $('[name="latitude"]').val();
        let lng = $('[name="longitude"]').val();
        if(lat === ''){
            $('#addMarker').show();
            $('#deleteMarker').hide();
        }

        function myMap() {
            let place = new google.maps.LatLng(lat ,lng);
            let myCenter = new google.maps.LatLng(37.062914807102906,50.423115491867065);
            let mapCanvas = document.getElementById("map");
            let mapOptions =
                {
                    center: myCenter,
                    zoom: 12,
                    scrollwheel: false
                };
            let map = new google.maps.Map(mapCanvas, mapOptions);

            let marker = new google.maps.Marker({
                position: place,
                map: map
            });

            $('#addMarker').click(function (event) {
                event.preventDefault();
                $('#addMarker').hide();
                $('#deleteMarker').show();
                google.maps.event.addListener(map, 'click', function(event) {
                    placeMarker(event.latLng);
                    google.maps.event.clearListeners(map, 'click');
                });
            });

            $('#deleteMarker').click(function (event) {
                event.preventDefault();
                $('#deleteMarker').hide();
                $('#addMarker').show();
                $('#lat').val('');
                $('#lng').val('');
                marker.setMap(null);
            });

            function placeMarker(location) {
                $('#lat').val(location.lat());
                $('#lng').val(location.lng());
                marker = new google.maps.Marker({
                    position: location,
                    map: map
                });
            }
        }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBJXj14jwwsgwA1DeIRMY5jBiRwT_byxVs&callback=myMap"></script>
@endsection

@section('settings')
    active
@endsection