<tr>
    <td>{{ $title }}</td>
    <td>{{ $body }}</td>
    <td>{{ $date }}</td>
    <td>
        <div class="btn-group">
            <a class=" dropdown-toggle" data-toggle="dropdown" href="#">
                <div class="navbar-header">
                    <div class="test">
                    </div>
                </div>
            </a>
            <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu">
                <li><a href="{{ route('posts.edit', $id) }}">ویرایش</a></li>
                <li class="divider"></li>
                <li>
                    {!! Form::open(['method'=>'DELETE', 'action'=>['PostController@destroy', $id]]) !!}
                        {!! Form::submit('حذف', ['id'=>'delete', 'style' => 'background: none; border: none; margin-left:25px;']) !!}
                    {!! Form::close() !!}
                </li>
            </ul>
        </div>
    </td>
</tr>