@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Create Contact</div>
                    <div class="panel-body">
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
                           
                            
                            {{Form::submit('Add Contact', ['class' => 'btn btn-primary'])}}
                            
                        </form>    
                        {!! Form::close() !!}

                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection