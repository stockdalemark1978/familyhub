@extends('layouts.app')

@section('content')




<div class="container">
    <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                <div class="panel-body">
                    Click on a section to begin!
                </div>
            
        <div class="row mb-5">
    
            <div class="col-sm-6 col-md-4 col-lg-4 mt-4">
                <div class="card card-inverse card-info">
                    <img class="card-img-top" src="../img/contacts.jpg">
                    <div class="card-block">
                       
                        <h4 class="card-title">Family Contacts</h4>
                       
                    </div>
                    <div class="card-footer">
                        <a href="/contacts" class="btn btn-info btn-md">Go To Contacts</a>
                    </div>
                </div>
            </div>
            
            <div class="col-sm-6 col-md-4 col-lg-4 mt-4">
                <div class="card card-inverse card-info">
                    <img class="card-img-top" src="../img/photos.jpg">
                    <div class="card-block">
                       
                        <h4 class="card-title">Photo Albums</h4>
                       
                    </div>
                    <div class="card-footer">
                       <a href="/albums" class="btn btn-info btn-md">Go To Albums</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-4 mt-4">
                <div class="card card-inverse card-info">
                    <img class="card-img-top" src="../img/calendar.jpg">
                    <div class="card-block">
                       
                        <h4 class="card-title">Calendar</h4>
                        
                    </div>
                    <div class="card-footer">
                        <a href="/calendars" class="btn btn-info btn-md">Go To Calendar</a>
                    </div>
                </div>
            </div>
        </div>
</div>






   <div class="panel panel-default">
 <div class="row mb-5">
 
            <div class="col-sm-6 col-md-4 col-lg-4 mt-4 col-md-offset-2 col-sm-offset-3 col-lg-offset-2">
                <div class="card card-inverse card-info">
                    <img class="card-img-top" src="../img/groceries.jpg">
                    <div class="card-block">
                       
                        <h4 class="card-title">Groceries List</h4>
                        
                    </div>
                    <div class="card-footer">
                        <a href="/groceries" class="btn btn-info btn-md">Go To Groceries List</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-4 mt-4">
                <div class="card card-inverse card-info">
                    <img class="card-img-top" src="../img/list.jpg">
                    <div class="card-block">
                       
                        <h4 class="card-title">Chores List</h4>
                       
                    </div>
                    <div class="card-footer">
                        <a href="/chores" class="btn btn-info btn-md">Go To Chores List</a>
                    </div>
                </div>
            </div>
            <!-- <div class="col-sm-6 col-md-4 col-lg-4 mt-4">
                <div class="card card-inverse card-info">
                    <img class="card-img-top" src="https://www.jamiesale-cartoonist.com/wp-content/uploads/cartoon-business-man-free1.png">
                    <div class="card-block">
                       
                        <h4 class="card-title">Groceries List</h4>
                        <div class="card-text">
                            Tawshif is a web designer living in Bangladesh.
                        </div>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-info btn-sm">Follow</button>
                    </div>
                </div>
            </div> -->
        </div>
</div>
</div>
</div>
</div>
</div>

@endsection
