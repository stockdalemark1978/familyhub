@extends('layouts.app')

@section('content')
<div class="container">
    <form>
    <h3>Create Album</h3>
    {!!Form::open(['action' => 'AlbumController@store','method' => 'POST', 'enctype' => 'multipart/form-data'])!!}
        <div class="form-group">
        {{Form::text('name','',['placeholder' => 'Album Name','class' => 'form-control'])}}
        </div>
        <div class="form-group">
        {{Form::textarea('description','',['placeholder' => 'Album Description', 'class' => 'form-control'])}}
        </div>
        <div class="form-group">
        {{Form::file('cover_image')}}
        </div>
        <div class="form-group">
        {{Form::submit('submit', ['class' => 'btn btn-primary'])}}
        </div>
        
    {!! Form::close() !!}
    </form>
</div>
@endsection