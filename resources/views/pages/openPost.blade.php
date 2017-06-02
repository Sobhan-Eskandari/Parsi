@extends('layouts.blog')

@section('content')
    <br>
    <div class="container-fluid openPost mt-5 pt-5">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-sm-8">
                <img src="{{ asset('images/post-image.png') }}" class="img-fluid" width="674.5px">

            </div>
        </div>
        <br>
        <div class="row justify-content-center mt-3">
            <div class="col-lg-6 col-sm-8">
                <div class="row justify-content-between px-0">
                    <div class="col px-3">
                        <h5 class="text-right">ضریب همبستگی پیرسون</h5>
                    </div>
                    <div class="col px-3">
                        <h6 class="text-left">نوشته شده در 29 مرداد 1396</h6>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-6 col-sm-8">
                <p class="mt-4">
                    بسیاری از صاحبان سایت ها، مطالب سایت را در اختیار طراحان سایت قرار می دهند ولی طراح سایت ممکن است
                    نیاز باشد تا در صورت امکان متون سایت را ویرایش کند و در بعضی موارد آنها را از نو بنویسد. طراح سایت
                    معمولا آزمایش قابل استفاده بودن سایت را نیز برای بررسی منوها و سرعت بارگذاری سایت انجام خواهد داد.

                    برنامه نویسان توسعه وب، عملکردهای یک وب سایت را برنامه نویسی می کنند، ولی تمام برنامه نویسی ها باید
                    در چهارچوب HTML در صفحات جاسازی شوند. و بلعکس، محتویات HTML می توانند درون برنامه ها جا سازی شوند.
                    توسعه دهندگان وب، همچنین سایت را از لحاظ قابلیت استفاده کاربر، مورد بررسی و آزمایش قرار می دهند،
                    حداقل برنامه نویسان، این آزمایش را برای عملکردهایی که برنامه نویسی می کنند مورد آزمایش قرار می گیرد.
                    در نتیجه برنامه نویسان همچنین نیاز به داشتن دانشی در خصوص HTML دارند.
                    <br><br>
                    طراحی وب سایت معمولا شامل ساخت مطالب و قالب سایت می باشد در حالیکه توسعه وب شامل ساخت عملکرد سایت و
                    آزمایش قابل استفاده بودن آن می باشد.
                    طراحان وب سایت می بایست مهارت کافی در استفاده از ابزارهایی نظیر فتوشاپ را داشته باشند. اکثر آنها
                    همچنین با زبان HTML نیز آشنایی دارند بطوریکه می توانند طرح هایشان را پیاده سازی کنند. ولی به هر حال،
                    استفاده از انیمیشن در سایت و قالب سایت و طراحی آنها برای صفحات مختلف نیز از وظایف طراحان وب سایت می
                    باشد.
                </p>
            </div>
        </div>
        <br>
        <div class="row justify-content-center mt-3">
            <div class="col-lg-6 col-sm-8">
                <div class="row justify-content-between px-0">

                    <div class="col px-3">
                        <div class="row justify-content-start">
                            <div class="col-2 px-0">
                                <img src="{{ asset('images/facebook.png') }}"
                                     alt="در حال بارگذاری" width="40px" height="40px" class="img-fluid">
                            </div>
                            <div class="col-2 px-0">
                                <img src="{{ asset('images/telegram.png') }}"
                                     alt="در حال بارگذاری" width="40px" height="40px" class="img-fluid">
                            </div>
                            <div class="col-2 px-0">
                                <img src="{{ asset('images/linkedin.png') }}"
                                     alt="در حال بارگذاری" width="40px" height="40px" class="img-fluid">
                            </div>
                        </div>
                    </div>
                    <div class="col px-3">
                        <a href="#" class="link"><p class="text-left">صفح اول <i class="fa fa-long-arrow-left pt-2"
                                                                    aria-hidden="true"></i></p></a>
                    </div>
                </div>
            </div>
        </div>
        <br><br><br>

    </div>

@endsection