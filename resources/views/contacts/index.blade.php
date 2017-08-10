@extends('layouts.app')

@section('content')

    <a href="/home"><p><i class="fa fa-chevron-circle-left" aria-hidden="true"></i> Return To Dashboard</p></a>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Family Contacts<span class="pull-right"><button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#addModal"><i class="fa fa-plus"></i>
 
</button></div>
                @if(count($contacts))
                    <div class="panel-body">
                    <div id="no-more-tables">
                    <table class="table table-striped table-responsive">
                    <thead class="cf">
                    <tr>
                        <th class="numeric">Name</th>
                        <th class="numeric">Email</th>
                        <th class="numeric">Phone</th>
                        <th class="numeric">Address</th>
                        <th class="numeric">Notes</th>
                        <th class="numeric"></th>
                        <th class="numeric"></th>
                        
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($contacts as $contact)
                        <tr>
                            <td data-title="Name">{{$contact->name}}</td>
                            <td data-title="Email">{{$contact->email}}</td>
                            <td data-title="Phone">{{$contact->phone}}</td>
                            <td data-title="Address">{{$contact->address}}</td>
                            <td data-title="Notes">{{$contact->notes}}</td>
                            <td data-title="Edit"><a class="btn btn-info btn-xs pull-right albBack" href="/contacts/{{$contact->id}}/edit"><i class="fa fa-pencil" aria-hidden="true"></i></a></td>

                            
                            <td data-title="Delete">
                             {!!Form::open(['action' => ['ContactController@destroy', $contact->id],'method' => 'POST', 'class' => 'pull-right', 'onsubmit' => 'return confirm("Are you sure you want to delete this contact?")'])!!}
                        
                            {{Form::hidden('_method', 'DELETE')}} {{ Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-primary btn-xs'] ) }}

                                                       
                        
                        {!! Form::close() !!}
                            </td>
                        </tr>

                    @endforeach
                    </tbody>
                    </table>

                    @else
                    <p>&nbsp; No Contacts Found</p>
                    </div>
                @endif
                </div
                </div
            </div>
        </div>
    </div>


<!--Modal-->


<div class="modal fade" tabindex="-1" role="dialog" id="addModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Add New Contact</h4>
      </div>
      <div class="modal-body">
         {!!Form::open(['action' => 'ContactController@store','method' => 'POST'])!!}
                        <form>
                            <div class="form-group">
                            {{Form::text('name','',['placeholder' => 'Name','class' => 'form-control'])}}
                            </div>
                            <div class="form-group">
                            {{Form::text('email','',['placeholder' => 'Email','class' => 'form-control'])}}
                            </div>
                            <div class="form-group">
                            {{Form::text('phone','',['placeholder' => 'Phone','class' => 'form-control'])}}
                            </div>
                            <div class="form-group">
                            {{Form::text('address','',['placeholder' => 'Address','class' => 'form-control'])}}
                            </div>
                            <div class="form-group">
                            {{Form::textarea('notes','',['placeholder' => 'Notes', 'class' => 'form-control'])}}
                            </div>
                           
                            <div class="row">
                            {{Form::submit('Add Contact', ['class' => 'btn btn-success pull-right'])}}
                            
                        </form>    
                        {!! Form::close() !!}

                        <button type="button"id="closeCont" class="btn btn-info pull-right" data-dismiss="modal">Close</button>
                        </div>

      </div>
      
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->





@foreach($contacts as $contact)

<div class="modal fade" tabindex="-1" role="dialog" id="editModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        
        <h4 class="modal-title">Edit Contact</h4>
      </div>
      <div class="modal-body">
         {!!Form::open(['action' => ['ContactController@update', $contact->id], 'method' => 'POST'])!!}
                        <form>
                            <div class="form-group">
                            {{Form::text('name',$contact->name,['placeholder' => 'Name','class' => 'form-control'])}}
                            </div>
                            <div class="form-group">
                            {{Form::text('email',$contact->email,['placeholder' => 'Email','class' => 'form-control'])}}
                            </div>
                            <div class="form-group">
                            {{Form::text('phone',$contact->phone,['placeholder' => 'Phone','class' => 'form-control'])}}
                            </div>
                            <div class="form-group">
                            {{Form::text('address',$contact->address,['placeholder' => 'Address','class' => 'form-control'])}}
                            </div>
                            <div class="form-group">
                            {{Form::textarea('notes',$contact->notes,['placeholder' => 'Notes', 'class' => 'form-control'])}}
                            </div>
                           
                            {{Form::hidden('_method', 'PUT')}}
                            <div class="row">
                            {{Form::submit('Update Contact', ['class' => 'btn btn-primary pull-right'])}}
                            
                        </form>    
                        {!! Form::close() !!}

                        <button type="button" class="btn btn-info pull-right" data-dismiss="modal">Close</button>
                        </div>

      </div>
      
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

@endforeach







 


@endsection