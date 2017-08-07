@extends('layouts.app')

@section('content')
  @if(count($albums) > 0)
    <?php
      $colcount = count($albums);
  	  $i = 1;
?>
<div class="container">
  <div class="row text-center">
    <h1>Photo Albums &nbsp; <button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#addModal">
  Add Album
</button></h1>
    </div>
    <div id="albums">
      <div class="row text-center">
        @foreach($albums as $album)
          @if($i == $colcount)
             <div class="col-sm-4">
               <a href="/albums/{{$album->id}}">
                  <img class="img-thumbnail" src="storage/album_covers/{{$album->cover_image}}" alt="{{$album->name}}" width="250" height="250">
                </a>
               
               <h4>{{$album->name}}</h4>
          @else
            <div class="col-sm-4">
              <a href="/albums/{{$album->id}}">
                <img class="img-thumbnail" src="storage/album_covers/{{$album->cover_image}}" alt="{{$album->name}}" width="250" height="250">
              </a>
              
              <h4>{{$album->name}}</h4>
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
    <p>No Albums To Display</p>
  @endif

@endsection
</div>




<!--Modal-->


<div class="modal fade" tabindex="-1" role="dialog" id="addModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Add New Album</h4>
      </div>
      <div class="modal-body">
         {!!Form::open(['action' => 'AlbumController@store','method' => 'POST', 'enctype' => 'multipart/form-data'])!!}
    <form>
        <div class="form-group">
        {{Form::text('name','',['placeholder' => 'Album Name','class' => 'form-control'])}}
        </div>
        <div class="form-group">
        {{Form::textarea('description','',['placeholder' => 'Album Description', 'class' => 'form-control'])}}
        </div>
        <div class="form-group">
        <h5>Add Album Cover Photo</h5>
        {{Form::file('cover_image')}}
        </div>
        
        <div class="row">
        {{Form::submit('Create Album', ['class' => 'btn btn-primary pull-right'])}}
        
    </form>    
    {!! Form::close() !!}

                        <button type="button" class="btn btn-default pull-right" data-dismiss="modal">Close</button>
                        </div>

      </div>
      
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->





<!-- <div class="row">
    <div class="col-sm-4 col-lg-4">
    
    </div>
    <div class="col-sm-4 col-lg-4">

    </div>
    <div class="col-sm-4 col-lg-4">

    </div>
</div> -->