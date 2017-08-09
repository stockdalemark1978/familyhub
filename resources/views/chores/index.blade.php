@extends('layouts.app')

@section('content')

<div class="container" ng-app="app" ng-controller="Controller">
  <a href="/home"><p><i class="fa fa-chevron-circle-left" aria-hidden="true"></i> Return To Dashboard</p></a>

<div class="row">
    <div class="col-sm-6 col-sm-offset-3"  ng-repeat="user in users">
  <!-- <form style="margin-bottom: 20px;" method="get" action="/chores/create">
    <button class="btn btn-success btn-xs" type="submit">Add</button>
  </form> -->

<div class="panel panel-default">
    <div class="panel-heading clearfix">
      <h3 class="panel-title pull-left">Chore List</h3>
    </div>
    <div class="panel-body">
      
      <form method="post" action="/chores">
        {{ csrf_field() }}
        <div class="form-group">
          <label for="name">Name</label>
          <input ng-model="choreName" type="text" class="form-control" id="name" name="name" placeholder="chore Item">
        </div>
        <!-- <div class="form-group">
          <label for="content">Idea</label>
          <input type="text" class="form-control" id="content" name="content" placeholder="">
        </div> -->
        <!-- <select id="priority_id" name="priority_id">
          <option ng-repeat="priority in priorities" value="[[ priority.id ]]">[[ priority.name]]</option>
        </select> -->

        <button type="submit" class="btn btn-success btn-sm"><i class="fa fa-plus" aria-hidden="true"></i></button>
      </form>

    </div>
  </div>


  <div class="panel panel-default" ng-repeat="chore in chores">
    <div class="panel-heading clearfix">
        <h3 class="panel-title pull-left">[[ chore.name ]]</h3>
        <form method="post" action="[[ chore.action ]]">
            {{ csrf_field() }}
            {{ method_field('DELETE')}}
            <button class="btn btn-primary btn-xs pull-right" type="submit"><i class="fa fa-trash" aria-hidden="true"></i></button>
        </form>
        <!-- <form method="get" action="[[ chore.action ]]">
            <button style="margin-right: 10px;" class="btn btn-warning btn-xs pull-right" type="submit">Edit</button>
        </form>  -->
        </div>
        <!-- <div class="panel-body">
        [[ chore.content ]]
        <br />
        </div> -->
  </div>

 
    
</div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.6/angular.min.js"></script>

<script>
  function Controller($scope, $location) {

    $scope.chores = {!! $chores !!};
    $scope.users = {!! $users !!};
  }
  angular
    .module('app', [], function($interpolateProvider) {
      $interpolateProvider.startSymbol('[[');
      $interpolateProvider.endSymbol(']]');
    })
    .controller('Controller', Controller);
</script>

@endsection