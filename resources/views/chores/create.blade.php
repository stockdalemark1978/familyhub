@extends('layouts.app')

@section('content')

<div class="container" ng-app="app" ng-controller="Controller">

  <div class="panel panel-default">
    <div class="panel-heading clearfix">
      <h3 class="panel-title pull-left">Add To Chore List</h3>
    </div>
    <div class="panel-body">
      
      <form method="post" action="/chores">
        {{ csrf_field() }}
        <div class="form-group">
          <label for="name">Name</label>
          <input type="text" class="form-control" id="name" name="name" placeholder="Chore Item">
        </div>
        <!-- <div class="form-group">
          <label for="content">Idea</label>
          <input type="text" class="form-control" id="content" name="content" placeholder="">
        </div> -->
        <!-- <select id="priority_id" name="priority_id">
          <option ng-repeat="priority in priorities" value="[[ priority.id ]]">[[ priority.name]]</option>
        </select> -->

        <button type="submit" class="btn btn-success btn-xs">Create</button>
      </form>

    </div>
  </div>

</div>






<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.6/angular.min.js"></script>

<script>
  function Controller($scope) {

   

  }
  angular
    .module('app', [], function($interpolateProvider) {
      $interpolateProvider.startSymbol('[[');
      $interpolateProvider.endSymbol(']]');
    })
    .controller('Controller', Controller);
</script>

@endsection