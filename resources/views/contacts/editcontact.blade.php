@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Contact<a href="/contacts" class="pull-right btn btn-info btn-xs">Back To Contacts</a></div>
                    <div class="panel-body">
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
                            {{Form::submit('Update Contact', ['class' => 'btn btn-success'])}}
                            
                        </form>    
                        {!! Form::close() !!}

                </div>
                </div>
            </div>
        </div>
    </div>
</div>






@endsection