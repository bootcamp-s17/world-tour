@extends('layouts.app')

@section('content')
<div class="container" ng-controller="Controller">
    <a href="/tours/">go back</a>
    <form method="post" action="/stops">
            {{ csrf_field() }}

            <input type="text" name="where">
            <input type="datetime-local" name="when">
            <input type="hidden" name="tour_id" value="[[tour.id]]">
            <button type="submit">create a new stop</button>
        </form>

    <div class="row">
        <h2>[[tour.name]] Tour</h2>
        <div id="stops" ng-repeat="stop in stops">
            <div class="stop" >
                <a href="/stops/[[stop.id]]">[[stop.where]]</a>
                <form method="post" action="[[stop.action]]">
                    {{ csrf_field() }}
                    {{ method_field('DELETE')}}
                    <button type="submit">delete</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
  function Controller($scope, $location) {

    $scope.tour = {!! $tour !!};
    $scope.stops = {!! $stops !!};


  }

</script>
@endsection