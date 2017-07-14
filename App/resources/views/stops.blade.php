@extends('layout')

@section('content')
        <div class="container">
       


           @foreach ($stops as $stop)

         {{$stop->where}} <br />

         @endforeach
        </div>
@stop