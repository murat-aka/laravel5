@extends('master')


@section('content')

  <h1>justin bieber official fun club</h1>
    
    @foreach($songs as $index => $song)
    
        <li><a href="/songs/{{ $index }}">{{ $song }}</a></li>
    
    @endforeach

  


@stop