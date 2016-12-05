<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SBP Home</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/main.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" id="navbar-logo" href="#">
                    <img src="img/SBP_Logo_websafe.gif" alt="logo">    
                </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Portfolio <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="portfolio_sport.html">Sport</a></li>
                            <li><a href="portfolio_nature.html">Nature</a></li>
                            <li><a href="portfolio_scenic.html">Scenic</a></li>
                            <li><a href="portfolio_people.html">People</a></li>
                            <li><a href="portfolio_other.html">Other</a></li>                            
                        </ul>
                    </li>
                    <li>
                        <a href="blog_roll.html">Blog</a>
                    </li>
                    <li>
                        <a href="about.html#">About Me</a>
                    </li>
                    <li>
                        <a href="contact.html">Contact</a>
                    </li>
                   
                    <li class="dropdown">
                         <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Login <span class="caret"></span></a>
                         <ul class="dropdown-menu">
                            <li><a href="#">Account</a></li>
                            <li><a href="#">Admin</a></li>
                            <li><a href="#">Logout</a></li>                    
                         </ul>
                    </li> 
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container-fluid">
        <div class="row slider-top">
            <div class="col-xs-12">
                
                <div id="my-slider" class="carousel slide" data-ride="carousel" data-interval="3000">

                    <!-- Indicators aka dot nav -->
                    <ol class="carousel-indicators">
                        <!-- Count from zero. Put active class on dot for the active image below -->
                        <li data-target="#my-slider" data-slide-to="0" class="active"></li>
                        <li data-target="#my-slider" data-slide-to="1"></li>
                        <li data-target="#my-slider" data-slide-to="2"></li>
                        <li data-target="#my-slider" data-slide-to="3"></li>
                        <li data-target="#my-slider" data-slide-to="4"></li>

                    </ol>


                    <!-- Wrapper for slide -->
                    <div class="carousel-inner" role="listbox">
                        <!-- class active on the first slide -->
                        <div class="item active">
                            <img src="img/rugbyTeamCrop1580.JPG" alt="man bruce in a plane"/>
                            <div class="carousel-caption">
                                <h1>Wainui champs</h1>
                            </div>
                        </div>  

                        <div class="item">
                            <img src="img/bevanBowls1580.JPG" alt="The Mad Butcher"/>
                            <div class="carousel-caption">
                                <h1>Bevan in fine form for Norths</h1>
                            </div>
                        </div>

                        <div class="item">
                            <img src="img/duncanSlashes1580.JPG" alt="Steam Train"/>
                            <div class="carousel-caption">
                                <h1>Duncan slashes the ball for 4</h1>
                            </div>
                        </div>

                        <div class="item">
                            <img src="img/AndyWalksOff1580.JPG" alt="Steam Train"/>
                            <div class="carousel-caption">
                                <h1>Andy gets 50 at Whitby</h1>
                            </div>
                        </div>

                        <div class="item">
                            <img src="img/andyPortrait.jpg" alt="Steam Train"/>
                            <div class="carousel-caption">
                                <h1>Andy stands tall.</h1>
                            </div>
                        </div>

                    </div>

                    <!-- Controls or next and prev buttons -->

                    <a class="left carousel-control" href="#my-slider" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>

                    <a class="right carousel-control" href="#my-slider" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>                    

                </div>
            </div>
        </div>    
    
        <!-- Footer -->
       <!--  <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; BiSH Design 2016</p>
                </div>
            </div> -->
            <!-- /.row -->
        <!-- </footer> -->

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>