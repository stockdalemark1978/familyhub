@extends('layouts.app')

@section('content')
  @if(count($albums) > 0)
    <?php
      $colcount = count($albums);
  	  $i = 1;
?>
<div class="container">
  <a href="/home"><p><i class="fa fa-chevron-circle-left" aria-hidden="true"></i> Return To Dashboard</p></a>
  <div class="panel panel-default">
                <div class="panel-heading">Photo Albums<span class="pull-right"><button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#addModal"><i class="fa fa-plus"></i>
 
</button></div>
  <div class="row text-center">
    
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


                  <!-- This delete currently doesn't work
                 {!!Form::open(['action' => ['AlbumController@destroy', $album->id], 'method' => 'POST'])!!}
        {{Form::hidden('_method', 'DELETE')}}
        {{Form::submit('Delete Album', ['class' => 'btn btn-danger'])}} -->

    {!!Form::close()!!}
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
    <a class="btn btn-success" href="/albums/create">Create Album</a>
  @endif

@endsection
</div>
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
        {{Form::submit('Create Album', ['class' => 'btn btn-success pull-right'])}}
        
    </form>    
    {!! Form::close() !!}

                        <button type="button" id="closeAlb" class="btn btn-info pull-right" data-dismiss="modal">Close</button>
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