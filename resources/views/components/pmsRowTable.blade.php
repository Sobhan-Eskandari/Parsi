<tr style="{{ $style }}">
    <td>
        <div class="row">
            <div class="col-md-11 col-xs-10">
                <div class="row">
                    <span class="pull-right one_row_table">
                        <h4 class="table_title">
                            <span class="name_h">{{ $name }}</span>
                            &nbsp;|
                            <span class="date">&nbsp;{{ $date }}
                            </span>
                        </h4>
                    </span>
                </div>
                <div class="row">
                    <p class="more_exp_tb">
                        {{ $message }}
                    </p>
                </div>
            </div>
            <div class="col-md-1 col-xs-2">
                <img src="{{ asset('images/icone.png') }}" class="icone_user ">
            </div>
        </div>
    </td>

    <td class="upper_td">

        <div class="btn-group">
            <a class=" dropdown-toggle" data-toggle="dropdown" href="#">
                <div class="navbar-header">
                    <div class="test">
                    </div>
                </div>
            </a>
            <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu">
                <li><a href="{{ route('messages.show', $id) }}">پاسخ</a></li>
                <li class="divider"></li>
                <li>
                    {!! Form::open(['method'=>'DELETE', 'action'=>['MessageController@destroy', $id]]) !!}
                        {!! Form::submit('حذف', ['id'=>'delete', 'style' => 'background: none; border: none; margin-left:25px;']) !!}
                    {!! Form::close() !!}
                </li>
            </ul>
        </div>
    </td>
</tr>