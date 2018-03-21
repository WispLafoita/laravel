<table class="table">
    <tr>
        <th>Видео</th>
        <th>Название</th>
        <th>Категория</th>
        <th>Описание</th>
        <th>Дата</th>
    </tr>
    @foreach($movies as $one)
        <tr>
            <td width="200px"><img src="{{asset('public\media\uploads/'.Auth::user()->id.'/'.$one->video)}}" alt="" class="img-thumbnail">
            </td>
            <td>
                {{$one->name}}
            </td>
            <td>
                {{$one->categories}}
            </td>
            <td>
                {{$one->about}}
            </td>
            <td>
                {{$one->created_at}}
            </td>
            <td>
                <a href="#" class="btn btn'default" onclick="delete_pos('/home/delete/{{$one->id}}','Вы действительно хотите удалить это видео?')">Удалить</a>
            </td>
            <td>
                <a href="{{asset('home/edit/'.$one->id)}}" class="btn btn'default" onclick="delete_pos('/home/edit/{{$one->id}}','Вы действительно хотите редактировать это видео?')">Редактировать</a>
            </td>
        </tr>
    @endforeach
</table>
<p align="center">
    {!! $movies->links(); !!}
</p>