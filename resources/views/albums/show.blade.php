@extends('layouts.app')

@section('content')
<h1>{{$album->name}}</h1>
<a class="btn btn-info" href="/albums">Back To Albums</a>
<button type="button" class="btn btn-success btn-md" data-toggle="modal" data-target="#addModal">
  Add Photo
</button>
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
<!--Modal-->


<div class="modal fade" tabindex="-1" role="dialog" id="addModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Add New Photo</h4>
      </div>
      <div class="modal-body">
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
        <div class="row">
        {{Form::submit('Add Photo', ['class' => 'btn btn-success pull-right'])}}
        
    </form>    
    {!! Form::close() !!}

                        <button type="button" id="closeAlb" class="btn btn-info pull-right" data-dismiss="modal">Close</button>
                        </div>

      </div>
      
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
  
  
  
@endsection