@extends('layout.main')

@section('content')
@if ($games)
  <table class="table table-hover">
    <thead>
    <tr>
      <th scope="Id">#</th>
      <th scope="col">Tytuł</th>
      <th scope="col">Wydawca</th>
      <th scope="col">Ocena</th>
      <th scope="col">Kategoria </th>
      <th scope="col">Szczegóły</th>
    </tr>
    </thead>
    <tbody>
    @foreach ($games ?? [] as $game)
    @include('games.builder.listRow')
  @endforeach
    </tbody>
  </table>
  {{$games->links()}}
@else
  @include('games.builder.indexEmpty')
@endif

@endsection