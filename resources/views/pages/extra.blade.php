@extends('layout.layout')

@section('title', 'Extra')

@section('content')

<h1>Extra Laravel Webpage</h1>
<h2>{{ $foo }}</h2>

<ul>

@foreach ($tasks as $task)

  <li>{{ $task }}</li>

@endforeach

</ul>

@endsection
