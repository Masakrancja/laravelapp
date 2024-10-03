<tr>
  <th scope="row">{{ ($currentPage - 1) * $count + $loop->iteration }}</th>
  <td>{{$game->title}}</td>
  <td>{{$game->genres_id}}</td>
  <td>{{$game->rate}}</td>
  <td>{{$game->name}}</td>
  <td><a href="{{route('games.b.show', ['id' => $game->id])}}">Szczegóły</a></td>
</tr>