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
            <a class="navbar-brand" id="navbar-logo" href="/">
                <img src="/img/SBP_Logo_websafe.gif" alt="logo">    
            </a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Portfolio <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="/portfolios/sport">Sport</a></li>
                        <li><a href="/portfolios/nature">Nature</a></li>
                        <li><a href="/portfolios/scenic">Scenic</a></li>
                        <li><a href="/portfolios/people">People</a></li>
                        <li><a href="/portfolios/other">Other</a></li>                            
                    </ul>
                </li>
                <li>
                    <a href="/posts">Blog</a>
                </li>
                <li>
                    <a href="/about">About Me</a>
                </li>
                <li>
                    <a href="/contact">Contact</a>
                </li>
               
                <li class="dropdown">
                     <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Admin <span class="caret"></span></a>
                     <ul class="dropdown-menu">
                        <li><a href="#">Account</a></li>
                        <li><a href="{{url('posts/create/')}}">Blog Admin</a></li>
                        <li><a href="{{url('gallery/list/')}}">Gallery Admin</a></li>
                        <li><a href="#">Logout</a></li>                    
                     </ul>
                </li> 
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>