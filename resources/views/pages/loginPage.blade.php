@extends('layouts.blog')
@section('content')

    <div class="container-fluid boxing login">
        <div class="row">
            <div class="col-xs-8 col-xs-offset-2 edges">
                <div class="row">
                    <div class="col-xs-12">
                        <h3 class="account_title">وارد حساب کاربری خود شوید</h3>
                    </div>
                </div>
                <br>
                <div class="row input_boxing">
                    <div class="col-xs-12">
                        <div class="form-group">
                            <div class="inner-addon right-addon">
                                <i class="glyphicon glyphicon-user"></i>
                                <input class="form-control inputNamel" type="text" id="inputNamel"
                                       placeholder="نام کاربری" tabindex="1">
                            </div>
                        </div>

                    </div>
                </div>
                <form>
                    <div class="row input_boxing">
                        <div class="col-xs-12">
                            <div class="form-group">
                                <div class="inner-addon right-addon">
                                    <i class="glyphicon glyphicon-lock"></i>
                                    <input class="form-control inputPass" type="password" id="inputPass"
                                           placeholder="رمز عبور" tabindex="2"></div>
                            </div>
                        </div>
                    </div>

                    <div class="row check_boxing">
                        <div class="col-lg-12 col-lg-offset-0 col-md-12 col-md-offset-0 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0">
                            <main>
                                <li class="check_part">
                                    <label class='with-square-checkbox'>
                                        <input type='checkbox'>
                                        <span class="check_title">مرا به خاطر داشته باش</span>
                                    </label>
                                </li>
                            </main>
                        </div>
                    </div>


                    <div class="row boxing_btn_login">
                        <div class="col-xs-12">
                            <button class="login_button btn" tabindex="4">ورود</button>

                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>



@endsection