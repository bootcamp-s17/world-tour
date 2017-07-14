@extends('layouts.app')

@section('content')

<div class='container'>
	
	<form style="margin-bottom: 20px;" method="get" action="/ideas/create">
	    <button class="btn btn-success btn-xs" type="submit">Add</button>
	</form>


	@foreach ($tours as $tour)
		<div class="panel panel-default" >
		<div class="panel-heading clearfix">
		  <h3 class="panel-title pull-left">{{ $tour['name'] }}</h3>
		  <form method="post" action="{{ $tour['action'] }}">
		    {{ csrf_field() }}
		    {{ method_field('DELETE')}}
		    <button class="btn btn-danger btn-xs pull-right" type="submit">Delete</button>
		  </form>
		  <form method="get" action="[[ idea.action ]]">
		    <button style="margin-right: 10px;" class="btn btn-warning btn-xs pull-right" type="submit">Edit</button>
		  </form>
		</div>
		<div class="panel-body">
		  @foreach ($stops as $stop)
		  	@if ( $tour['id'] == $stop['tour_id'] ) 
		  		<form method="post" action="{{ $tour['action'] }}" style='display:inline-block;'>
			   
				    {{ csrf_field() }}
				    {{ method_field('DELETE')}}
				    
					
				  	<button class="btn btn-danger btn-xs" type="submit" >Delete</button>
				  </form>
				  <form method="get" action="[[ idea.action ]]" style='display:inline-block;'>
				  <button style="margin-right: 10px;" class="btn btn-warning btn-xs" type="submit">Edit</button>
			  </form>
			  {{ $stop['date'] }} - {{ $stop['where'] }}
			  <br />
			@endif

		  @endforeach

		  <br />
		</div>
		</div>
	@endforeach




</div>

@endsection