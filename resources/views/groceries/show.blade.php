@extends('layouts.app')

@section('content')

<div class="container" ng-app="app" ng-controller="Controller">

  <div class="panel panel-default">
    <div class="panel-heading clearfix">
      <h3 class="panel-title pull-left">[[ grocery.name ]]</h3>
      <form method="post" action="[[ grocery.action ]]">
        {{ csrf_field() }}
        {{ method_field('DELETE')}}
        <button class="btn btn-danger btn-xs pull-right" type="submit">Delete</button>
      </form>
      <form method="get" action="[[ grocery.action ]]">
        <button style="margin-right: 10px;" class="btn btn-warning btn-xs pull-right" type="submit">Edit</button>
      </form>
    </div>
    <!-- <div class="panel-body">
      [[ grocery.content ]]
      <br />
    </div> -->
  </div>

</div>

<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.6/angular.min.js"></script>

<script>
  function Controller($scope, $location) {

    $scope.grocery = {!! $grocery !!};

  }
  angular
    .module('app', [], function($interpolateProvider) {
      $interpolateProvider.startSymbol('[[');
      $interpolateProvider.endSymbol(']]');
    })
    .controller('Controller', Controller);
</script>

@endsection