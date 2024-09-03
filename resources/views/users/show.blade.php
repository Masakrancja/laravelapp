@extends('layout.main')

@section('content')
<div>
  Dane użytkownika
</div>
<ul>
  <li>Imię: {{$user['firstName']}}</li>
  <li>Nazwisko: {{$user['lastName']}}</li>
  <li>Miasto: {{$user['city']}}</li>
  <li>
    Wiek: {{$user['age']}}
    @if ($user['age'] >= 18)
    Osoba dorosła
  @else
  Osoba niepełnoletnia
@endif
  </li>
</ul>

@isset($user['nick'])
  Podano nick
@endisset

<div>{!!$user['html']!!}</div>
<div>{{$user['html']}}</div>

@endsection