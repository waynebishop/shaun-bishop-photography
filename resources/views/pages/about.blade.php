@extends('app')

@section('content')



<!-- Page Heading -->
    <div class="row">
        <div class="col-sm-12">
            <h1 class="page-header gallery-header">About {{ $first }} {{ $last }}</h1>
        </div>
    </div>
    <!-- /.row -->

    <!-- Photography -->
    
    <!-- Photography Row 1 -->
    <!-- Image for row 1 -->
    <div class="row post-row">
        <div class="col-sm-12 col-md-7">            
             <a href="">
                <img class="img-responsive img-rounded" src="/img/andyBatsman_Medium.jpg" alt="">
            </a>
        </div>

        <div class="col-sm-12 col-md-5"> 
            <h2 class="text-center">Photographer</h2>
            <p>Photo Para 1 Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
    </div>

    <hr class="hidden-xs hidden-sm">

    <div class="row">
        <div class="col-sm-12 col-md-7">            
            <p>Photo Para 2 Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

            <p>Photo Para 3 Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.  </p>
        </div>

        <div class="col-sm-12 col-md-5"> 
            <p>Photo Para 4 Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
    </div>

    <hr>

    <!-- Sportsperson -->    
    <div class="row post-row">            
        <div class="col-sm-12 col-md-5">
            <h2 class="text-center">Sportsperson</h2>
            <p>Sports Para 1 Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
        
        <!-- Image Sportsperson -->
        <div class="col-sm-12 col-md-7">            
            <a href="blog_post.html">
                <img class="img-responsive img-rounded" src="/img/bowler_Medium.jpg" alt="">
            </a>               
        </div>
    </div> <!-- Close Row -->

    <div class="row post-row">            
        <div class="col-sm-12 col-md-5">
            <p>Sports Para 2 Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
        
        <div class="col-sm-12 col-md-7">
            <p>Sports Para 3 Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>            

        </div>
    </div> <!-- Close Row -->

@stop