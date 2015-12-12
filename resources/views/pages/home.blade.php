@extends('master')


@section('content')


   @foreach ($lessons as $lesson)
       
     <h2> {{ $lesson }}</h2>
   @endforeach



@stop