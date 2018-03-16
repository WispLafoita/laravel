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
            <td width="200px"><img src="{{asset('public\media\uploads/'.$one->video)}}" alt="" class="img-thumbnail">
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
        </tr>
    @endforeach
</table>