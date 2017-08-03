@extends('layouts.app')

@section('content')
<div class="container">
    
    <h3>Upload Photo</h3>
    {!!Form::open(['action' => 'PhotoController@store','method' => 'POST', 'enctype' => 'multipart/form-data'])!!}
    <form>
        <div class="form-group">
        {{Form::text('title','',['placeholder' => 'Photo Title','class' => 'form-control'])}}
        </div>
        <div class="form-group">
        {{Form::textarea('description','',['placeholder' => 'Photo Description', 'class' => 'form-control'])}}
        </div>
        {{Form::hidden('album_id', $album_id)}}
        <div class="form-group">
        {{Form::file('photo')}}
        </div>
        
        {{Form::submit('Add Photo', ['class' => 'btn btn-primary'])}}
        
    </form>    
    {!! Form::close() !!}
    
</div>
@endsection