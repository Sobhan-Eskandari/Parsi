@extends('layouts.blog')
@section('content')

    <div class="container-fluid boxing login">
        <div class="row justify-content-center py-5">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-9 edges">
                <div class="row justify-content-center">
                    <div class="col-8">
                        <h3 class="account_title text-center pt-5 pb-4">وارد حساب کاربری خود شوید</h3>
                    </div>
                </div>
                <br>
                <div class="row input_boxing justify-content-center">
                    <div class="col-8">
                        <div class="form-group">
                            <div class="inner-addon right-addon">
                                <i class="fa fa-user" aria-hidden="true"></i>
                                <input class="form-control inputNamel" type="text" id="inputNamel"
                                       placeholder="نام کاربری" tabindex="1">
                            </div>
                        </div>

                    </div>
                </div>
                <form>
                    <div class="row input_boxing justify-content-center">
                        <div class="col-8">
                            <div class="form-group">
                                <div class="inner-addon right-addon">
                                    <i class="fa fa-lock" aria-hidden="true"></i>
                                    <input class="form-control inputPass" type="password" id="inputPass"
                                           placeholder="رمز عبور" tabindex="2"></div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row justify-content-center">
                        <div class="col-8 text-center">
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


                    <div class="row boxing_btn_login justify-content-center">
                        <div class="col-8 text-center">
                            <button class="login_button btn py-2 mt-4" tabindex="4" type="submit">ورود</button>

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection