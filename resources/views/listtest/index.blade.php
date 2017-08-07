@extends('layouts.app')

@section('content')

<div class="container" ng-app="app" ng-controller="Controller">

<div class="row">
    <div class="col-sm-4" ng-repeat="list in lists">
  <!-- <form style="margin-bottom: 20px;" method="get" action="/groceries/create">
    <button class="btn btn-success btn-xs" type="submit">Add</button>
  </form> -->

<div class="panel panel-default">
    <div class="panel-heading clearfix">
      <h3 class="panel-title pull-left">New List</h3>
    </div>
    <div class="panel-body">
      
      <form method="post" action="/groceries">
        {{ csrf_field() }}
        <div class="form-group">
          <label for="name">Name</label>
          <input ng-model="groceryName" type="text" class="form-control" id="name" name="name" placeholder="Grocery Item">
        </div>
        <!-- <div class="form-group">
          <label for="content">Idea</label>
          <input type="text" class="form-control" id="content" name="content" placeholder="">
        </div> -->
        <!-- <select id="priority_id" name="priority_id">
          <option ng-repeat="priority in priorities" value="[[ priority.id ]]">[[ priority.name]]</option>
        </select> -->

        <button type="submit" class="btn btn-success btn-xs"><i class="fa fa-plus-square" aria-hidden="true"></i></button>
      </form>

    </div>
  </div>


  <div class="panel panel-default" ng-repeat="item in items">
    <div class="panel-heading clearfix">
        <h3 class="panel-title pull-left">[[ item.name ]]</h3>
        <form method="post" action="[[ grocery.action ]]">
            {{ csrf_field() }}
            {{ method_field('DELETE')}}
            <button class="btn btn-danger btn-xs pull-right" type="submit">Delete</button>
        </form>
        <!-- <form method="get" action="[[ grocery.action ]]">
            <button style="margin-right: 10px;" class="btn btn-warning btn-xs pull-right" type="submit">Edit</button>
        </form>  -->
        </div>
        <!-- <div class="panel-body">
        [[ grocery.content ]]
        <br />
        </div> -->
  </div>

 
    
</div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.6/angular.min.js"></script>

<script>
  function Controller($scope, $location) {

    $scope.lists = {!! $lists !!};
    $scope.items = {!! $items !!};

   
  

  }
  angular
    .module('app', [], function($interpolateProvider) {
      $interpolateProvider.startSymbol('[[');
      $interpolateProvider.endSymbol(']]');
    })
    .controller('Controller', Controller);
</script>

@endsection