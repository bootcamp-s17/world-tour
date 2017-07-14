@extends('layouts.app')

@section('content')

<div class="container" ng-app="app" ng-controller="Controller">


  <form style="margin-bottom: 20px;" method="get" action="/tours/create">
    <button class="btn btn-success btn-xs" type="submit">Add</button>
  </form>



  <div class="panel panel-default" ng-repeat="tour in tours">
    <div class="panel-heading clearfix">
      <h3 class="panel-title pull-left">[[ tour.name ]]</h3>
      <form method="post" action="[[ tour.action ]]">
        {{ csrf_field() }}
        {{ method_field('DELETE')}}
        <button class="btn btn-danger btn-xs pull-right" type="submit">Delete</button>
      </form>
      <form method="get" action="[[ tour.action ]]">
        <button style="margin-right: 10px;" class="btn btn-warning btn-xs pull-right" type="submit">Edit</button>
      </form>
    </div>
  </div>

</div>

<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.6/angular.min.js"></script>

<script>
  function Controller($scope, $location) {

    $scope.tours = {!! $tours !!};
    $scope.stops = {!! $stops !!};

  }
  angular
    .module('app', [], function($interpolateProvider) {
      $interpolateProvider.startSymbol('[[');
      $interpolateProvider.endSymbol(']]');
    })
    .controller('Controller', Controller);
</script>

@endsection