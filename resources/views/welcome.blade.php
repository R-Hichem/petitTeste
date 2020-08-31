@extends('layout')

@section('title')
   page 1
@endsection

@section('content')
    <h1>page 1</h1><br>
    <h2> {{ $slug }}  </h2> <br>
    <a href="/page1">page 1</a> <br>
    <a href="/page2">page 2</a>
@endsection