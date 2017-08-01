@extends('layouts.app')

@section('content')
<div class="container">
    

  <h3>Create Album</h3>
  {!!Form::open(['action' => 'AlbumController@store','method' => 'POST', 'enctype' => 'multipart/form-data'])!!}
    {{Form::text('name','',['placeholder' => 'Album Name'])}}
    {{Form::textarea('description','',['placeholder' => 'Album Description'])}}
    {{Form::file('cover_image')}}
    <button type="button" class="btn btn-primary">{{Form::submit('submit')}}</button>
  {!! Form::close() !!}
  </div>
@endsection