@extends('layout.main')
@section('content')
<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Tytuł</th>
      <th>Kategoria</th>
      <th>Rok wydania</th>
      <th>Szczegóły</th>
    </tr>
  </thead>
  <tbody>
    @forelse ($games as $game)
    @include('games.indexRow', ['item' => $game])
  @empty
  @include('games.indexEmpty')
@endforelse
  </tbody>
</table>
@endsection