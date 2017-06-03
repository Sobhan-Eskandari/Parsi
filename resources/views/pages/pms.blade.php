@extends('layouts.dashboard')

@section('content')

    @component('components.flash') @endcomponent

<div class="confPmsBox">
    <br><br>
    <div class="row">
        <div class="col-xs-12 table_padding">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th><h4>پیام ها</h4></th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @foreach($messages as $message)
                    @component('components.pmsRowTable')
                        @slot('id') {{ $message->id }} @endslot
                        @if($message->read === 0)
                            @slot('style') background-color: #f4f4f4; @endslot
                        @else
                            @slot('style') @endslot
                        @endif
                        @slot('name') {{ $message->name }} @endslot
                        @slot('message') {{ str_limit($message->message, 150) }} @endslot
                        @slot('date') {{ $message->created_at->format('y/m/d') }} @endslot
                    @endcomponent
                @endforeach
                </tbody>
            </table>

        </div>
    </div>
    <div class="row">
        <div class="col-lg-8 col-lg-offset-0 col-md-8 col-md-offset-0 col-xs-11 col-xs-offset-0 padding_pagination">
            {{ $messages->links() }}
        </div>
    </div>
</div>

@endsection

@section('messages')
    active
@endsection