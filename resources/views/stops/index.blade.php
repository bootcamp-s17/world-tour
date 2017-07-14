@extends('layouts.app')

@section('content')
<div class="container-fluid h-100" id="maincontent" style="background-color: transparent;">
</div>
<div class="container text-center">
	@foreach ($tours as $tour)
	<div class="row">
		<div class="col text-center"><h1>{{ $tour->name }}</h1></div>
	</div>
		@foreach ($stops as $stop)
			@if ($stop->tour_id === $tour->id)
				<div class="row">
					<div class="col text-right mr-2">{{ $stop->location }}</div>
					<div class="col text-left ml-2">{{ date("m/d/Y", strtotime($stop->date)) }}</div>
				</div>
			@endif
		@endforeach

	@endforeach
</div>
@endsection