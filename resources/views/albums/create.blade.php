@extends('layouts.app')

@section('content')
<div class="container">
    
    <h3>Create Album</h3>
    {!!Form::open(['action' => 'AlbumController@store','method' => 'POST', 'enctype' => 'multipart/form-data'])!!}
    <form>
        <div class="form-group">
        {{Form::text('name','',['placeholder' => 'Album Name','class' => 'form-control'])}}
        </div>
        <div class="form-group">
        {{Form::textarea('description','',['placeholder' => 'Album Description', 'class' => 'form-control'])}}
        </div>
        <div class="form-group">
        {{Form::file('cover_image')}}
        </div>
        
        {{Form::submit('submit', ['class' => 'btn btn-primary'])}}
        
    </form>    
    {!! Form::close() !!}
    
</div>
@endsection