<tr>
    <td>
        <img src="{{ asset('images/icone.png') }}" class="icone_user">
        {{ $name }}
    </td>
    <td class="upper_td">{{ $profession }}</td>
    {{--<td class="upper_td">{{ $desc }}</td>--}}
    <td class="upper_td">{{ $date }}</td>
    <td class="upper_td">

        <div class="btn-group">
            <a class=" dropdown-toggle" data-toggle="dropdown" href="#">
                <div class="navbar-header">
                    <div class="test">
                    </div>
                </div>
            </a>
            <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu">
                <li><a href="{{ route('lecturers.edit', $id) }}">ویرایش</a></li>
                <li class="divider"></li>
                <li>
                    {!! Form::open(['method'=>'DELETE', 'action'=>['LecturerController@destroy', $id]]) !!}
                        {!! Form::submit('حذف', ['id'=>'delete', 'style' => 'background: none; border: none; margin-left:25px; margin-']) !!}
                    {!! Form::close() !!}
                </li>
            </ul>
        </div>

    </td>
</tr>