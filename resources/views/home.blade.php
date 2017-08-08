@extends('layouts.app')

@section('content')




<div class="container">
    <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                <div class="panel-body">
                    Click on a section to begin!
                </div>
            
        <div class="row mb-5">
            <a href="/contacts" >
            <div class="col-sm-6 col-md-4 col-lg-4 mt-4">
                <div class="card card-inverse card-info">
                    <img class="card-img-top" src="../img/contactsIcon.png">
                    
                    <div class="card-block ">
                       
                        <h4 class="card-title">Family Contacts</h4>
                       
                    </div>
                    
                </div>
            </div>
            </a>
            
            <a href="/albums" >
            <div class="col-sm-6 col-md-4 col-lg-4 mt-4">
                <div class="card card-inverse card-info">
                    <img class="card-img-top" src="../img/cameraIcon.png">
                    
                    <div class="card-block">
                       
                        <h4 class="card-title">Photo Albums</h4>
                       
                    </div>
                   
                </div>
            </div>
            </a>

            <a href="/calendars" >
            <div class="col-sm-6 col-md-4 col-lg-4 mt-4">
                <div class="card card-inverse card-info">
                    <img class="card-img-top" src="../img/calendarIcon.png">
                   
                    <div class="card-block">
                       
                        <h4 class="card-title">Calendar</h4>
                        
                    </div>
                   
                </div>
            </div>
            </a>

              <div class="panel panel-default">
 <div class="row mb-5">
            <a href="/groceries" >
            <div class="col-sm-6 col-md-4 col-lg-4 mt-4 col-md-offset-2 col-sm-offset-3 col-lg-offset-2">
                <div class="card card-inverse card-info">
                    <img class="card-img-top" src="../img/groceryList.png">
                    
                    <div class="card-block">
                       
                        <h4 class="card-title">Groceries List</h4>
                        
                    </div>
                    
                </div>
            </div>
            </a>

            <a href="/chores" >
            <div class="col-sm-6 col-md-4 col-lg-4 mt-4">
                <div class="card card-inverse card-info">
                    <img class="card-img-top" src="../img/listsicon.png">
                    
                    <div class="card-block">
                       
                        <h4 class="card-title">Chores List</h4>
                       
                    </div>
                    
                </div>
            </div>
            </a>
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
</div>
</div>

@endsection
