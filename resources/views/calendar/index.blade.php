@extends('layouts.app')

@section('content')

        <div class="container">
        <a href="/home"><p><i class="fa fa-chevron-circle-left" aria-hidden="true"></i> Return To Dashboard</p></a>
                <div class="col-sm-6 col-md-4 col-lg-4 mt-4 col-md-offset-2 col-sm-offset-3 col-lg-offset-2">
                        
        
                <iframe src="https://calendar.google.com/calendar/embed?src=4r1q6q14p286lta0ff39om9too%40group.calendar.google.com&ctz=America/New_York" style="border: 0" width="800" height="600" frameborder="0" scrolling="no"></iframe> 
        
        <!-- 
                {!! $calendar->calendar() !!}
                {!! $calendar->script() !!}  -->
                </div>
        </div>

        
@endsection