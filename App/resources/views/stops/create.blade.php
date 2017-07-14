@extends('layouts.app')

@section('content')

<div class="container" ng-app="app" ng-controller="Controller">

  <div class="panel panel-default">
    <div class="panel-heading clearfix">
      <h3 class="panel-title pull-left">New Stop!</h3>
    </div>
    <div class="panel-body">
      
      <form method="post" action="/stops">
        {{ csrf_field() }}
        <div class="form-group">
          <label for="title">Title</label>
          <input type="text" class="form-control" id="title" name="title" placeholder="Title">
        </div>
        <div class="form-group">
          <label for="content">Stop</label>
          <input type="text" class="form-control" id="content" name="content" placeholder="Event">
        </div>
        <select id="priority_id" name="priority_id">
          <option ng-repeat="tour in tours" value="[[ tour.id ]]">[[ tour.name ]]</option>
        </select>

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