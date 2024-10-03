@extends('layout.main')
@section('content')
<div class="row mt-2 mb-2">
  <div class="col mt-1">
    <div class="card" style="width: 18rem;">
      <div class="card-body">
        <h5 class="card-title">Max</h5>
        <h6 class="card-subtitle mb-2 text-muted">Maksymalna ocena</h6>
        <p class="card-text">{{$stats['max']}}</p>
      </div>
    </div>
  </div>
  <div class="col mt-1">
    <div class="card" style="width: 18rem;">
      <div class="card-body">
        <h5 class="card-title">Min</h5>
        <h6 class="card-subtitle mb-2 text-muted">Minimalna ocena</h6>
        <p class="card-text">{{$stats['min']}}</p>
      </div>
    </div>
  </div>
  <div class="col mt-1">
    <div class="card" style="width: 18rem;">
      <div class="card-body">
        <h5 class="card-title">Ilość</h5>
        <h6 class="card-subtitle mb-2 text-muted">Ilość gier</h6>
        <p class="card-text">{{$stats['count']}}</p>
      </div>
    </div>
  </div>
  <div class="col mt-1">
    <div class="card" style="width: 18rem;">
      <div class="card-body">
        <h5 class="card-title">Średnia</h5>
        <h6 class="card-subtitle mb-2 text-muted">Średnia ocena</h6>
        <p class="card-text">{{$stats['avg']}}</p>
      </div>
    </div>
  </div>
</div>
<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Tytuł</th>
      <th>Rok wydania</th>
      <th>Gatunek</th>
      <th>Ocena</th>
      <th>Szczegóły</th>
    </tr>
  </thead>
  <tbody>
    @forelse ($games ?? [] as $game)
    @include('games.eloquent.indexRow', ['item' => $game])
  @empty
  @include('games.eloquent.indexEmpty')
@endforelse
  </tbody>
</table>
@endsection