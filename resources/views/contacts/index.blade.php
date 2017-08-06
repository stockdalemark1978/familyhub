@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Family Contacts</div>
                @if(count($contacts))
                    <div class="panel-body">
                    <table class="table table-striped">
                    <tr>
                        <th>Name</th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                    @foreach($contacts as $contact)
                        <tr>
                            <td>{{$contact->name}}</td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>

                    @endforeach
                    </table>
                @endif
                </div
                </div
            </div>
        </div>
    </div>
</div>
@endsection