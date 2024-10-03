<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{$applicationName}}</title>

  <!-- <link rel="stylesheet" href="{{ mix('css/app.css')}}" />
  <script src="{{ mix('js/app.js')}}"></script> -->

  @vite(['resources/sass/app.scss', 'resources/js/app.js'])

  <style>
    td {
      padding-right: 15px;
    }
  </style>
</head>

<body>
  <h1>{{$applicationName}}</h1>
  @php
  $success = session('success', false);
  @endphp

  <!-- <div class="flash">
    <div class="{{ $success ? 'success' : 'fail'}}">
      {{$success ? 'Poprawnie przesłano formularz' : 'Błąd przesłania formularza'}}
    </div>
  </div> -->

  <div class="sidebar">
    @section('sidebar')
    <ul>
      <li><a href="{{route('games.b.dashboard')}}">Dashboard Builder</a></li>
      <li><a href="{{route('games.b.list')}}">Lista Builder</a></li>
      <li><a href="{{route('games.e.dashboard')}}">Dashboard Eloquent</a></li>
      <li><a href="{{route('games.e.list')}}">Lista Eloquent</a></li>
    </ul>
    @show
  </div>

  <div class="content">
    @yield('content')
  </div>

</body>

</html>