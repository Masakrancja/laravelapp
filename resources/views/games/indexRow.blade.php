<tr>
  <td>{{$item['id']}}</td>
  <td>{{$item['title']}}</td>
  <td>{{$item['category']}}</td>
  <td>{{$item['year']}}</td>
  <td><a href="{{route('get.games.show', ['id' => $item['id']])}}">Szczegóły</a></td>
</tr>