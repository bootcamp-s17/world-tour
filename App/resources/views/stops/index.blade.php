@extends('layouts.app')

@section('content')

<div class="container" ng-app="app" ng-controller="Controller">


  <form style="margin-bottom: 20px;" method="get" action="/stops/create">
    <button class="btn btn-success btn-xs" type="submit">Add</button>
  </form>



  <div class="panel panel-default" ng-repeat="stop in stops">
    <div class="panel-heading clearfix">
      <h3 class="panel-title pull-left">[[ stop.when ]]</h3>
      <form method="post" action="[[ stop.action ]]">
        {{ csrf_field() }}
        {{ method_field('DELETE')}}
        <button class="btn btn-danger btn-xs pull-right" type="submit">Delete</button>
      </form>
      <form method="get" action="[[ stop.action ]]">
        <button style="margin-right: 10px;" class="btn btn-warning btn-xs pull-right" type="submit">Edit</button>
      </form>
    </div>
    <div class="panel-body">
      [[ stop.where ]]
      <br />
      [[ stop.tours_id ]]
      <br />
    </div>
  </div>

</div>

<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.6/angular.min.js"></script>

<script>
  function Controller($scope, $location) {

    $scope.stops = {!! $stops !!};
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