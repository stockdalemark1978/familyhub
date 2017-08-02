@extends('layouts.app')

@section('content')
<h1>{{$album->name}}</h1>
<a class="btn btn-info" href="/albums">Back To Albums</a>
<a class="btn btn-primary" href="/photos/create/{{$album->id}}">Upload Photo To Album</a>

@endsection