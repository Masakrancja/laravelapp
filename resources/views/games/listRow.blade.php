<tr>
  <th scope="row">{{ ($currentPage - 1) * $count + $loop->iteration }}</th>
  <td>{{$game->title}}</td>
  <td>{{$game->genres_id}}</td>
  <td>{{$game->rate}}</td>
  <td><a href="{{route('games.show', ['id' => $game->id])}}">Szczegóły</a></td>
</tr>