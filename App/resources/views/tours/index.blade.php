@extends('layouts.app')

@section('content')
<div class="container">
<h1>Tours</h1>

@foreach($tours as $tour)
<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">{{$tour['name']}}</h3>
  </div>
  <div class="panel-body">
    @foreach($tour['stops'] as $stop)
		{{$stop['where']}} | {{$stop['when']}}
		<br>
    @endforeach
  </div>
</div>
@endforeach

</div>
@endsection