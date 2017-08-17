@extends('layouts.app')

@section('content')
    <div class="container">
    <a href="/albums/{{$photo->album_id}}"><i class="fa fa-chevron-circle-left" aria-hidden="true"></i> Back To Photo Gallery</a>
    <h3>{{$photo->title}}</h3>
    <p>{{$photo->description}}</p>
    <hr>
    <img class="thumbnail" src="/storage/photos/{{$photo->album_id}}/{{$photo->photo}}" alt="{{$photo->title}}" width="250" height="250">
    <br><br>
    {!!Form::open(['action' => ['PhotoController@destroy', $photo->id], 'method' => 'POST'])!!}
        {{Form::hidden('_method', 'DELETE')}}
        {{Form::submit('Delete Photo', ['class' => 'btn btn-primary'])}}

    {!!Form::close()!!}
    <hr>
    <small>Size: {{$photo->size}}</small>
    </div>
@endsection
