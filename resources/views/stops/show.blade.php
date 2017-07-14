@extends('layouts.app')

@section('content')
<div class="container" ng-controller="Controller">
<a href="/tours/[[stop.tour_id]]">go back</a>
    <div class="row">
        <h2>update [[stop.where]] Stop</h2>
        <form method="post" action="[[stop.action]]">
            {{ csrf_field() }}
            {{ method_field('PATCH')}}
            <input type="text" name="where" value="[[stop.where]]">
            <input type="datetime-local" name="when" value='[[stop.when.replace(" ", "T")]]'>
            <button type="submit">update</button>
        </form>
    </div>
</div>

<script>

  function Controller($scope, $location) {

    $scope.stop = {!! $stop !!};
  }

</script>

@endsection