@extends('layouts.app')

@section('content')


<h1>after you log in you should be able to go here</h1>

<div class="container"  ng-app='app' ng-controller="Controller">
    <div class="panel panel-success" ng-repeat="stop in stops">
        <div class="panel-heading">
            <h2 class="panel-title">[[ stop.where ]]</h2>
            <form method="post" action="[[tour.action]]">
                {{ csrf_field() }}
            </form>
        </div>
        <div class="panel-body"> 
            <h4 class="panel-body">[[ stop.when ]]</h4>
           <form method="post" action="[[stop.action]]">
                {{ csrf_field() }}
            </form>

        </div>
    </div> 
</div>







<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.6/angular.min.js"></script>
<script>
    function Controller($scope, $location){

        $scope.stops = {!! $stops !!};
    }
    angular
        .module('app',[], function($interpolateProvider){
            $interpolateProvider.startSymbol('[['); 
            $interpolateProvider.endSymbol(']]');
        })
        .controller('Controller', Controller);
</script>









@endsection