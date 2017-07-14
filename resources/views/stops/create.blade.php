@extends('layouts.app')

@section('content')
<div class="container" ng-controller="Controller">
    <div class="row">
        <h2>creating a stop for [[tour.name]]</h2>
        <form method="post" action="/stops">
            {{ csrf_field() }}

            <input type="text" name="where">
            <input type="datetime-local" name="when">
            <input type="hidden" name="tour_id" value="[[tour.id]]">
            <button type="submit">create</button>
        </form>
    </div>
</div>

<script>
  function Controller($scope, $location) {

    $scope.tour = {!! $tour !!};



  }

</script>
@endsection