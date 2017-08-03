@extends('layouts.app')

@section('content')
<h1>{{$album->name}}</h1>
<a class="btn btn-info" href="/albums">Back To Albums</a>
<a class="btn btn-primary" href="/photos/create/{{$album->id}}">Upload Photo To Album</a>
<hr>

 @if(count($album->photos) > 0)
    <?php
      $colcount = count($album->photos);
  	  $i = 1;
    ?>
    <div id="photos1">
      <div class="row text-center">
        @foreach($album->photos as $photo)
          @if($i == $colcount)
             <div class="col-sm-4">
               <a href="/photos/{{$photo->id}}">
                  <img class="img-thumbnail" src="/storage/photos/{{$photo->album_id}}/{{$photo->photo}}" alt="{{$photo->title}}" width="250" height="250">
                </a>
               
               <h4>{{$photo->title}}</h4>
          @else
            <div class="col-sm-4">
              <a href="/photos/{{$photo->id}}">
                  <img class="img-thumbnail" src="/storage/photos/{{$photo->album_id}}/{{$photo->photo}}" alt="{{$photo->title}}" width="250" height="250">
                </a>
               
               <h4>{{$photo->title}}</h4>
          @endif
        	@if($i % 3 == 0)
          </div></div><div class="row text-center">
        	@else
            </div>
          @endif
        	<?php $i++; ?>
        @endforeach
      </div>
    </div>
  @else
    <p>No Photos To Display</p>
  @endif
@endsection