@extends('layouts.dashboard')

@section('content')
    <div class="answerMsgBox">

        <!-----first panel(comments)---->
        <div class="row white_box_padding">
            <div class="col-lg-10 col-xs-12 pull-right">
                <div class="panel panel-default first_panel ">
                    <div class="panel-heading first_header_box">

                        <h4 class="heading_panel"><span class="glyphicon glyphicon-user user"></span>&nbsp;حمید وتر&nbsp;&nbsp;&nbsp;1395/6/25
                            <span class="pull-left">hamid.vetr@live.com</span>
                        </h4>

                    </div>

                    <div class="panel-body first_panelBody">
                        <p>
                            چهار : پارالمپیک و اولین مدال ما در همان روز اول. بازی تیم های فوتبال هفت نفره و بسکتبال با
                            ویلچر ایران برابر آرژانتین و آلمان هم فوق العاده بود. بدون هیچ ترحمی به قهرمان هایمان افتخار
                            کنیم. آنها بهترینند.<br>
                            پنج : موفقیت قطعه "چتر خیس" با صدای حامد همایون از سه جهت مهم است: اول اینکه همچنان می
                            توانیم به آثار همه گیرشدن یک آهنگ خوشبین باشیم. دوم اینکه "چتر خیس" در داخل کشور تولید شده و
                            سوم اینکه حامد همایون توانسته بدون استفاده از ابزاری مثل کلیپ و تیتراژ، آهنگش را به محبوبیت
                            برساند.<br>بهترین :
                            نُه : "فروشنده" مثل بنزهای آخرین مدل می فروشد! شک نکنید که اصغر فرهادی که اعتبار سینمای
                            ایران است در اقتصاد سینمای ما هم نفر اول خواهد شد.
                        </p>

                    </div>
                </div>
            </div>
        </div>
        <!----answer box---->
        <div class="row white_box_padding">
            <div class="col-lg-10 col-xs-12 pull-right">

                <div class="panel panel-default second_panel">
                    <div class="panel-heading second_header_box">

                        <h4 class="second_answer_head">پاسخ به : hamid.vetr@live.com

                            <span class="pull-left subject_answer">
                                                    <div class="form-group">

                                                        <input class="form-control admin_holder col-sm-10" type="text"
                                                               id="inpuSubAns" placeholder="موضوع پیام را وارد کنید">

                                                    </div>
                                                </span>
                            <span class="pull-left">موضوع :&nbsp;&nbsp;&nbsp;</span>
                        </h4>
                    </div>


                    <!---send message button---->
                    <div class="form-group textOfAnswer">
                        <textarea class="form-control" id="inputComments_answer"
                                  placeholder="متن پاسخ را وارد نمایید"></textarea>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="row white_box_padding">
            <div class="col-xs-12 pull-right">
                <button class="btn answerMsgBtn">ارسال پاسخ</button>
            </div>
        </div>

    </div>
@endsection