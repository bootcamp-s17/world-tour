@extends('layouts.app')

@section('content')


<div class="container text-center">
	@foreach ($tours as $tour)
		<h1 style='margin-top:75px;'> {{ $tour['name'] }} </h1>

		@foreach ( $stops as $stop )
			@if ( $tour['id'] == $stop['tour_id'] )
				<h2>{{ $stop['date'] }} - {{ $stop['where'] }}</h2>
			@endif
		@endforeach
	@endforeach
</div>
@endsection