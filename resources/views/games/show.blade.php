@extends('layout.main')

@section('content')
<h4>Informacja o grze</h4>
<div>
  <p>Id: {{$game['id']}}</p>
  <p>Tytuł: {{$game['title']}}</p>
  <p>Kategoria: {{$game['category']}}</p>
  <p>Rok Wydania: {{$game['year']}}</p>
</div>
<div><a href="{{route('get.games.index')}}">Porwót</a></div>
@endsection