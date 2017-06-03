@extends('layouts.dashboard')

@section('content')

@component('components.errors') @endcomponent

@component('components.flash') @endcomponent

<div class="adminProfileBox">
    <div class="row">
        <div class="col-xs-12">
            <h3>ویرایش اطلاعات ادمین</h3>
        </div>
    </div>
    <hr>
    <br>
    {!! Form::model($user , ['method'=>'PUT', 'action'=>['UserController@update', $user->id]]) !!}
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-11 col-xs-11 pull-right">
                <label>نام و نام خانوادگی</label>
                <div class="form-group">
                    {!! Form::text('name', $user->name, ['class' => 'form-control']) !!}
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-5 col-md-5 col-sm-11 col-xs-11 pull-right">
                <label>ایمیل</label>
                <div class="form-group">
                    {!! Form::email('email', $user->email, ['class' => 'form-control']) !!}
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-5 col-md-5 col-sm-11 col-xs-11 pull-right">
                <label>رمز عبور فعلی</label>
                <div class="form-group">
                    <input name="old_password" class="form-control" type="password">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-5 col-md-5 col-sm-11 col-xs-11 pull-right">
                <label>رمز عبور جدید</label>
                <div class="form-group">
                    <input name="password" class="form-control" type="password">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-5 col-md-5 col-sm-11 col-xs-11 pull-right">
                <label>تکرار رمز عبور جدید</label>
                <div class="form-group">
                    <input name="password_confirmation" class="form-control" type="password">
                </div>
            </div>
        </div>
        <br>
        <div class="row">
        <div class="col-xs-12 pull-right">
            <button type="submit" class="btn editBtnConf">ویرایش</button>
        </div>
    </div>
    {!! Form::close() !!}

</div>



@endsection

@section('admin')
    active
@endsection