@extends('layouts.app')

@section('content')


  <a href="/home"><p><i class="fa fa-chevron-circle-left" aria-hidden="true"></i> Return To Dashboard</p></a>

<div class="row" ng-app="app" ng-controller="Controller" >
    <div class="col-sm-6 col-sm-offset-3"  ng-repeat="user in users">
  <!-- <form style="margin-bottom: 20px;" method="get" action="/groceries/create">
    <button class="btn btn-success btn-xs" type="submit">Add</button>
  </form> -->

<div class="panel panel-default">
    <div class="panel-heading clearfix">
      <h3 class="panel-title pull-left">Grocery List</h3>
    </div>
    <div class="panel-body">
      
      <form method="post" action="/groceries">
        {{ csrf_field() }}
        <div class="form-group">
          <label for="name">Name</label>
          <input ng-model="groceryName" type="text" class="form-control" id="name" name="name" placeholder="Grocery Item">
        </div>
     

        <button type="submit" class="btn btn-success btn-sm"><i class="fa fa-plus" aria-hidden="true"></i></button>
      </form>

    </div>
  </div>


  <div class="panel panel-default" ng-repeat="grocery in groceries" >
    <div class="panel-heading clearfix">
        <h3 class="panel-title pull-left" ng-cloak>[[ grocery.name ]]</h3>
        <form method="post" action="[[ grocery.action ]]" >
            {{ csrf_field() }}
            {{ method_field('DELETE')}}
            <button class="btn btn-primary btn-xs pull-right" type="submit"><i class="fa fa-trash" aria-hidden="true"></i></button>
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


<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.6/angular.min.js"></script>

<script>
  function Controller($scope, $location) {

    $scope.groceries = {!! $groceries !!};
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