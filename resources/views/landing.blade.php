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
    <link href="https://fonts.googleapis.com/css?family=Scope+One" rel="stylesheet">
     <link rel="stylesheet"
  href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
  <script src="https://use.fontawesome.com/00ed1df00a.js"></script>
    <link href="css/style.css" rel="stylesheet">
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
            <a class="navbar-brand animated fadeInDownBig" href="#"><img src="../img/Familyhubnavbarlogo.png" alt="logo" width="150" id="navlogo"></a>
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
                    <li><a href="{{ url('/home') }}">Home</a></li>
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
            <h1>Welcome to <img src="../img/Familyhublogo2.png" alt="logo"></h1>
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
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <h3>Family Calendar</h3>
                    <p>Keep your family on the same page with a family calendar. Now everyone in the family will know when Jimmy's soccer game is, when mom's hair day is, and when little Susie next door has her birthday party.</p>
                </div>
                <div class="col-sm-4">
                    <img src="../img/calendar.jpg" width="300px" alt="">
                </div>
            </div>
        </div>
    </section>


    <section id="photos">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <img src="../img/photos.jpg" width="300px" alt="">
                </div>
                <div class="col-sm-8">
                    
                    <h3>Share Photos</h3>
                    <p>Keep your family on the same page with a family calendar. Now everyone in the family will know when Jimmy's soccer game is, when mom's hair day is, and when little Susie next door has her birthday party.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="lists">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <h3>Family Lists</h3>
                    <p>Grocery lists, chores lists, shopping lists...every family uses lists. Now you can make sure everyone in the family knows what needs to be done.</p>
                    
                </div>
                <div class="col-sm-4">
                    <img src="../img/list.jpg" width="300px" alt="">
                    
                </div>
            </div>
        </div>
    </section>

</body>

</html>