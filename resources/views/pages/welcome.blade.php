@extends('layout.layout')

@section('title', 'Home')

@section('content')

<h1>My First Laravel "{{ $stringliteral }}" Webpage</h1>
<h2>{{ $foo }}</h2>

<ul>

@foreach ($tasks as $task)

  <li>{{ $task }}</li>

@endforeach

</ul>

@endsection
