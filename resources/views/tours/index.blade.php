@extends('layouts.app')

@section('content')
<div class="container" ng-controller="Controller">
<h1>All Tours</h1>
    <form method="post" action="/tours/">
        {{ csrf_field() }}
        <input type="text" name="tour_name">
        <button type="submit">Add</button>
    </form>

    <div class="row">

       <div id="tours" ng-repeat="tour in tours">
           <div class="tour">
               <a href="/tours/[[tour.id]]">[[tour.name]]</a>
               <form method="post" action="[[tour.action]]">
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

    $scope.tours = {!! $tours !!};


  }

</script>

@endsection

