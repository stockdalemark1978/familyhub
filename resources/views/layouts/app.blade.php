<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'FamilyHub') }}</title>

    <!-- Styles -->
     <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet">  -->
     <script src="https://use.fontawesome.com/00ed1df00a.js"></script>
     <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet"> 
    

    <link href="https://fonts.googleapis.com/css?family=Arvo" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
     <!-- <link href="{{ asset('assets/css/gsdk.css') }}" rel="stylesheet"> -->
     <link href="{{ asset('css/main.css') }}" rel="stylesheet"> 
    <link href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.min.css" rel="stylesheet">
    
    
    
    

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top" >
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}" id="navlogo">
                        <img src="/img/navlogo2.png" alt="logo" width="150" ></a>
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Hub<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="/home">Dashboard</a></li>
                                <li><a href="/albums">Albums</a></li>
                                <li><a href="/calendars">Calendar</a></li>
                                <!-- <li role="separator" class="divider"></li> -->
                                <li><a href="/contacts">Contacts</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="/groceries">Groceries</a></li>
                                <li><a href="/chores">Chores</a></li>
                            </ul>
                            </li>
                            
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                            
                        @endif
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container">
        
            
            
        @include('inc.messages')
        @yield('content')
        </div>
    </div>

    <!-- Scripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.6/angular.min.js"></script>
    <script src="{{ asset('js/app.js') }}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.min.js"></script>
       
        
        
</body>
</html>
