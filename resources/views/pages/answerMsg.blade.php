@extends('layouts.dashboard')

@section('content')

    @component('components.errors') @endcomponent

    <div class="answerMsgBox">

        <!-----first panel(comments)---->
        <div class="row white_box_padding">
            <div class="col-lg-10 col-xs-12 pull-right">
                <div class="panel panel-default first_panel ">
                    <div class="panel-heading first_header_box">

                        <h4 class="heading_panel"><span class="glyphicon glyphicon-user user"></span>&nbsp;{{ $message->name }}&nbsp;&nbsp;&nbsp;{{ $message->created_at->format('y/m/d') }}
                            <span class="pull-left">{{ $message->email }}</span>
                        </h4>

                    </div>

                    <div class="panel-body first_panelBody">
                        <p>{{ $message->message }}</p>
                    </div>
                </div>
            </div>
        </div>
        <!----answer box---->
        {!! Form::open(['method'=>'POST', 'action'=>'MessageController@answer']) !!}
            <div class="row white_box_padding">
                <div class="col-lg-10 col-xs-12 pull-right">

                    <div class="panel panel-default second_panel">
                        <div class="panel-heading second_header_box">

                            <h4 class="second_answer_head">پاسخ به :{!! Form::text('email',$message->email,['style'=>'background-color:#252525; border: none; width: 500px;', 'readonly'=>'true']) !!}

                                <span class="pull-left subject_answer">
                                                        <div class="form-group">

                                                            {!! Form::text('subject',null,['class'=>'form-control admin_holder col-sm-10','id'=>'inpuSubAns','placeholder'=>'موضوع پیام را وارد کنید']) !!}

                                                        </div>
                                                    </span>
                                <span class="pull-left">موضوع :&nbsp;&nbsp;&nbsp;</span>
                            </h4>
                        </div>


                        <!---send message button---->
                        <div class="form-group textOfAnswer">
                            {!! Form::textarea('message',null,['class'=>'form-control','id'=>'inputComments_answer', 'rows' => '1','placeholder'=>'متن پاسخ را وارد نمایید']) !!}
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="row white_box_padding">
                <div class="col-xs-12 pull-right">
                    {!! Form::button('ارسال پاسخ',['type'=>'submit','class'=>'btn answerMsgBtn']) !!}
                </div>
            </div>
        {!! Form::close() !!}
    </div>
@endsection

@section('messages')
    active
@endsection