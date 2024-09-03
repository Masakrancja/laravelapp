@extends('layout.main')

@section('content')
<h2>User list</h2>
<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Imię</th>
      <th>Nazwisko</th>
      <th>Wiek</th>
      <th>Szczegóły</th>
    </tr>
  </thead>
  <tbody>

    <tr>
      <td colspan="3">EACH</td>
    </tr>

    @each('users.listRow', $users, 'data', 'users.emptyRow')


    <tr>
      <td colspan="3">FOREACH</td>
    </tr>

    @foreach ($users as $user)
    @include('users.listRow', ['data' => $user])
  @endforeach

    <tr>
      <td colspan="3">FOR</td>
    </tr>

    @for ($i = 0; $i < count($users); $i++)
    @include('users.listRow', ['data' => $users[$i]])
  @endfor

    <tr>
      <td colspan="3">FORELSE</td>
    </tr>

    @forelse ($users as $user)
    @include('users.listRow', ['data' => $user])
  @empty
  @include('users.emptyRow')
@endforelse


  </tbody>
</table>

@endsection