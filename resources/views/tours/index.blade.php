@extends('layouts.app')

@section('content')
	

	<div class="container w-75 text-center mt-5">
		<div class="row">
			<div class="col-8 offset-2">
				<h1>Welcome to Tourz!  <i class="fa fa-train" style="color:black !important;"></i></h1>
			</div>
		</div>
		<div class="row text-center">
			<div class="col">
				<h5>Please click below to make changes!</h5>
			</div>
		</div>
		<div class="row mt-5">
			<div class="col-6">
				<form action="tours" method="post">
					{{csrf_field()}}

				<div class="form-group">
					<label for="name">Desitnation</label>
					<input type="text" class="form-control" name="name" placeholder="Enter name for tour site...">
				</div>
<!-- 				<select name="priority_id" id="priority_id">
					<option value="">Select Priority</option>
					<option value="[[priority.id]]" ng-repeat="priority in priorities">
					</option>
				</select> -->
				<button type="submit" class="btn btn-success">Add New</button>
		</form>
			</div>
			<div class="col-6">
				
			</div>
		</div>
		@foreach ($tours as $tour)
		<div class="row text-center">
			{{$tour->name}}
		</div>
		@endforeach
	</div>

@endsection