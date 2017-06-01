@extends('layouts.dashboard')

@section('content')

    <div class="confSettingBox">
        <br><br>
        <div class="row">
            <div class="col-lg-4 col-md-10 col-sm-10 col-xs-10 pull-right">
                <div class="form-group">
                    <label class="conf_label_post"><big>عنوان پست</big></label>
                    <input class="form-control sendMessageInput" type="text" id="sendMessageInput" tabindex="1"></div>
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
                    <textarea class="form-control metaData"
                              tabindex="2"></textarea>
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
                <input class="form-control" type="text" tabindex="3"></div>
        </div>
        <br>
        <div class="row">
            <div class="col-lg-3 col-xs-10 pull-right">
                <label><big>پست الکترونیک</big></label>
                <input class="form-control" type="text" tabindex="4" placeholder="hamid.vetr@gmail.com"></div>
            <div class="col-lg-3 col-xs-10 pull-right">
                <label><big>شماره تماس</big></label>
                <input class="form-control" type="text" tabindex="5" placeholder="09114648844"></div>
            <div class="col-lg-3 col-xs-10 pull-right">
                <label><big>شماره موبایل</big></label>
                <input class="form-control" type="text" tabindex="6" placeholder="09015558899"></div>

        </div>
        <br>
        <div class="row">
            <div class="col-lg-3 col-xs-10 pull-right">
                <label><big>لینک بلیط</big></label>
                <input class="form-control" type="text" tabindex="7"></div>
            <div class="col-lg-3 col-xs-10 pull-right">
                <label><big>تلگرام</big></label>
                <input class="form-control" type="text" tabindex="8"></div>
            <div class="col-lg-3 col-xs-10 pull-right">
                <label><big>اینستاگرام</big></label>
                <input class="form-control" type="text" tabindex="9"></div>
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
                 <textarea class="form-control textEditor"
                           tabindex="2"></textarea>
            </div>
        </div>
        <br><br><br>
        <div class="row">
            <div class="col-lg-7 col-xs-10 pull-right">
                <label class="confTextAreaTable">درباره همایش:</label>
                <textarea class="form-control textEditor"
                          tabindex="2"></textarea>
            </div>
        </div>
        <br>
        <hr>
        <div class="row">
            <div class="col-lg-7 col-xs-10 pull-right">
                <label class="confTextAreaTable">درباره رویداد:</label>
                <textarea class="form-control textEditor"
                          tabindex="2"></textarea>
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
                        <label class="name_label">طول جغرافیایی:</label>
                        <input class="form-control inputWidth" type="text" id="inputWidth" tabindex="1">
                    </div>
                </div>

                <div class="row">
                    <div class="form-group pull-right">
                        <label class="name_label">عرض جغرافیایی:</label>
                        <input class="form-control inputHeight" type="text" id="inputHeight" tabindex="1">
                    </div>
                </div>

                <div class="row">&nbsp;</div>
                <div class="row">
                    <button class="btn add_btn">اضافه کردن به نقشه</button>
                </div>
                <br>
                <div class="row">
                    <button class="btn remove_btn">حذف کردن از نقشه</button>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <button class="btn pull-right conf_make_setting_btn"> ایجاد تغییرات</button>
            </div>
        </div>
        <br><br><br>
    </div>

@endsection