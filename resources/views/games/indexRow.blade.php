<tr>
  <td>{{$item->id}}</td>
  <td>{{$item->title}}</td>
  <td>{{ substr($item->publication_date, 0, 10) }}</td>
  <td>{{$item->rate}} / 10</td>
  <td><a href="{{route('get.games.show', ['id' => $item->id])}}">Szczegóły</a></td>
</tr>