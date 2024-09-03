<tr>
  <td>{{$data['id']}}</td>
  <td>{{$data['firstName']}}</td>
  <td>{{$data['lastName']}}</td>
  <td>{{$data['age']}}</td>
  <td><a href="{{route('get.users.show', ['userId' => $data['id']])}}">Szczegóły</a></td>
</tr>