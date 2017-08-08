<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
        crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp"
        crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Arvo" rel="stylesheet">
     <link rel="stylesheet"
  href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
  <script src="https://use.fontawesome.com/00ed1df00a.js"></script>
     <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet"> 
           <!-- <link href="css/aos.css" rel="stylesheet">   -->
           <link href="css/landing.css" rel="stylesheet">  

</head>

<body>
    <nav class="navbar-inverse navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand animated fadeInDownBig" href="#"><img src="../img/navlogo2.png" alt="logo" width="150" id="navlogo"></a>
            </div>
            <div id="navbar" class="collapse navbar-collapse">
            <!-- <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul> -->
            @if (Route::has('login'))
            <ul class="nav navbar-nav navbar-right">
                @if (Auth::check())
                    <li><a href="{{ url('/home') }}">Dashboard</a></li>
                @else
                    <li><a href="{{ route('login') }}">Login <i class="fa fa-user"></i></a></li>
                    <li><a href="{{ route('register') }}">Register <i class="fa fa-user-plus"></i></a></li>
                @endauth
            </ul>
                @endif
            </div>
        </div>
    </nav>



    


    <div class="cover">
        
        <div class="cover-text">
            <h1>Welcome to</h1><br>
            <h1 id="coverText">FamilyHub</h1>
            <p class="lead">Keeping families organized and on the same page .</p>
            <a href="{{ route('register') }}" role="button" class="btn btn-danger btn-lg">Get Started!</a>
        </div>
    </div>


<!-- <section id="why">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h2>Why Family Hub?</h2>
            </div>
        </div>
    </div>
</section> -->

    <section id="calendar">
        <div data-aos="slide-right" class="container">
            <div class="row">
                <div class="col-sm-8">
                    <h2>Family Calendar</h2>
                    <p>Keep your family on the same page with a family calendar. Now everyone in the family will know when Jimmy's soccer game is, when mom's hair day is, and when little Susie next door has her birthday party.</p>
                </div>
                <div class="col-sm-4">
                    <img src="../img/calendarIcon.png" width="300px" alt="">
                </div>
            </div>
        </div>
    </section>


    <section id="photos">
        <div data-aos="slide-left" class="container">
            <div class="row">
                <div class="col-sm-4">
                    <img src="../img/cameraIcon.png" width="300px" alt="">
                </div>
                <div class="col-sm-8">
                    
                    <h2>Share Photos</h2>
                    <p>Keep your family on the same page with a family calendar. Now everyone in the family will know when Jimmy's soccer game is, when mom's hair day is, and when little Susie next door has her birthday party.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="lists">
        <div data-aos="slide-right" class="container">
            <div class="row">
                <div class="col-sm-8">
                    <h2>Family Lists</h2>
                    <p>Grocery lists, chores lists, shopping lists...every family uses lists. Now you can make sure everyone in the family knows what needs to be done.</p>
                    
                </div>
                <div class="col-sm-4">
                    <img src="../img/listsicon.png" width="300px" alt="">
                    
                </div>
            </div>
        </div>
    </section>

       <section id="photos">
        <div data-aos="slide-left" class="container">
            <div class="row">
                <div class="col-sm-4">
                    <img src="../img/contactsIcon.png" width="300px" alt="">
                </div>
                <div class="col-sm-8">
                    
                    <h2>Family Contacts</h2>
                    <p>Keep track of all the important people to your family. Anyone who the family chooses can be added to the family contacts.</p>
                </div>
            </div>
        </div>
    </section>


     <!-- <footer>
        crafted with &hearts; and &coffee; in Lexington by Mark Stockdale</a>
    </footer> -->
<!-- <script src="../assets/js/aos.js"></script>
<script>
    AOS.init();
  </script> -->
</body>

</html>