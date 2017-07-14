@extends('layouts.app')

@section('content')

<div class="container" ng-app="app" ng-controller="Controller">

  <div class="panel panel-default">
    <div class="panel-heading clearfix">
      <h3 class="panel-title pull-left">New Tour Stop</h3>
    </div>
    <div class="panel-body">
      
      <form method="post" action="/tour">
        {{ csrf_field() }}
        <div class="form-group">
          <label for="title">Date</label>
          <input type="text" class="form-control" id="when" name="when" placeholder="When is it going down?">
        </div>
        <div class="form-group">
          <label for="title">Title</label>
          <input type="text" class="form-control" id="where" name="where" placeholder="Where is it going down?">
        </div>
        <div class="form-group">
          <label for="tour_id">Title</label>
          <select id="tour_id" name="tour_id">
            <option ng-repeat="tour in $tours" value="[[ tour.id ]]">[[ tour.name ]]</option>
          </select>

        </div>
        <button type="submit" class="btn btn-success btn-xs">Create</button>
      </form>
      
  </div>

</div>

</div>

<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.6/angular.min.js"></script>

<script>
  function Controller($scope) {

    $scope.tours = {!! $tours !!};

  }
  angular
    .module('app', [], function($interpolateProvider) {
      $interpolateProvider.startSymbol('[[');
      $interpolateProvider.endSymbol(']]');
    })
    .controller('Controller', Controller);
</script>

@endsection