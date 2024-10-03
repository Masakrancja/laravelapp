@extends('layout.main')

@section('content')
<div class="text-bg-dark p-1 mb-1 text-center fs-2">Statystyki</div>
<div class="row">
  <div class="col-sm-3 mb-3 mb-sm-0">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Maksymalna ocena</h5>
        <h4 class="card-title">{{$stats['max']}}</h4>
      </div>
    </div>
  </div>
  <div class="col-sm-3">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Minimalna ocena</h5>
        <h4 class="card-title">{{$stats['min']}}</h4>
      </div>
    </div>
  </div>
  <div class="col-sm-3 mb-3 mb-sm-0">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Ilość ocen</h5>
        <h4 class="card-title">{{$stats['count']}}</h4>
      </div>
    </div>
  </div>
  <div class="col-sm-3">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Średnia ocena</h5>
        <h4 class="card-title">{{$stats['avg']}}</h4>
      </div>
    </div>
  </div>
</div>
@endsection