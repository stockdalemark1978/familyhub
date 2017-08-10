@extends('layouts.app')

@section('content')

        
        <a href="/home"><p><i class="fa fa-chevron-circle-left" aria-hidden="true"></i> Return To Dashboard</p></a>
                <div class="col-sm-8 col-md-8 col-lg-8 mt-4">
                        
        
                <iframe src="https://calendar.google.com/calendar/embed?src=4r1q6q14p286lta0ff39om9too%40group.calendar.google.com&ctz=America/New_York" style="border: 0" width="1100" height="775" frameborder="0" scrolling="no"></iframe> 
        
        <!-- 
                {!! $calendar->calendar() !!}
                {!! $calendar->script() !!}  -->
                </div>
       

        
@endsection