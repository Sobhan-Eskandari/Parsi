@extends('layouts.dashboard')

@section('content')

    @component('components.errors') @endcomponent

    <div class="padding_right createPostBox">
        {!! Form::open(['method'=>'POST', 'action'=>'PostController@store', 'files' => true]) !!}
        <div class="row">
            <div class="col-xs-10 pull-right">
                <h3>ایجاد پست جدید</h3></div>
        </div>
        <div class="row">
            <div class="col-xs-10 pull-right">
                <hr>
            </div>
        </div>

            <div class="row">
            <div class="col-lg-4 col-md-10 col-sm-10 col-xs-10 pull-right">
                <div class="form-group">
                    <label class="conf_label_post"><big>عنوان پست</big></label>
                    <input name="title" class="form-control sendMessageInput" type="text" id="sendMessageInput" tabindex="1"></div>
            </div>
            <div class="col-lg-8 col-md-12 col-md-12">
                <div class="custom-file-upload">
                    <!--<label for="file">File: </label>-->
                    <input type="file" id="file" name="myfiles[]" multiple />
                </div>
            </div>
        </div>

        <br>
        <div class="row">
            <div class="col-xs-10 pull-right text-center">
                <div class="form-group">

                    {!! Form::textarea('body') !!}

                    <textarea class="form-control inputCommentsMessage" id="inputCommentsMessage"
                              placeholder="متن پاسخ را وارد نمایید" tabindex="4" name="postText"></textarea>

                </div>
                <script>
                    CKEDITOR.replace( 'body',{
                        height: 150
                    } );
                </script>

            </div>
        </div>


        <br>
        <div class="row">
            <div class="col-xs-12">
                {!! Form::submit('ایجاد مقاله', ['class'=>'btn pull-right conf_make_post_btn']) !!}
            </div>
        </div>
        <br>
        <br>
        <br>
        <br>

        {!! Form::close() !!}
    </div>

    <script>
        document.getElementById("uploadMasterPhoto").onchange = function () {
            document.getElementById("uploadMasterPhotoPlace").value = this.value;
        };
    </script>

@endsection

        <br></div>
    <script>
        CKEDITOR.replace('postText');
    </script>



@section('posts')
    active
@endsection