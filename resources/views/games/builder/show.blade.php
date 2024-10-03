@extends('layout.main')

@section('content')
<h4>Informacja o grze</h4>
@if ($game)
  <div>
    <p>Id: {{$game->id}}</p>
    <p>Tytuł: {{$game->title}}</p>
    <p>Opis: {{$game->description}}</p>
    <p>Data wydania: {{substr($game->publication_date, 0, 10)}}</p>
    <p>Ocena: {{$game->rate}} / 10</p>
  </div>
  <button class="btn btn-primary">Test</button>
@else
  @include('games.builder.indexEmpty')
@endif

<div><a href="{{route('games.b.list')}}">Porwót</a></div>
@endsection