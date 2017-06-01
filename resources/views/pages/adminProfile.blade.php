@extends('layouts.dashboard')

@section('content')



<div class="adminProfileBox">
    <div class="row">
        <div class="col-xs-12">
            <h3>ویرایش اطلاعات ادمین</h3>
        </div>
    </div>
    <hr>
    <br>
<div class="row">
    <div class="col-lg-4 col-md-4 col-sm-11 col-xs-11 pull-right">
        <label>نام و نام خانوادگی</label>
        <div class="form-group">
            <input class="form-control" type="text">
        </div>
    </div>
</div>
    <div class="row">
        <div class="col-lg-5 col-md-5 col-sm-11 col-xs-11 pull-right">
            <label>ایمیل</label>
            <div class="form-group">
                <input class="form-control" type="email">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-5 col-md-5 col-sm-11 col-xs-11 pull-right">
            <label>رمز عبور فعلی</label>
            <div class="form-group">
                <input class="form-control" type="password">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-5 col-md-5 col-sm-11 col-xs-11 pull-right">
            <label>رمز عبور جدید</label>
            <div class="form-group">
                <input class="form-control" type="password">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-5 col-md-5 col-sm-11 col-xs-11 pull-right">
            <label>تکرار رمز عبور جدید</label>
            <div class="form-group">
                <input class="form-control" type="password">
            </div>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-xs-12 pull-right">
            <button class="btn editBtnConf">ویرایش</button>
        </div>
    </div>

</div>



@endsection