@extends('master')


@section('content')

  <h1>justin bieber official fun club</h1>
    
    @foreach($songs as $song)
    
        <li>{{ $song }}</li>
    
    @endforeach

  


@stop