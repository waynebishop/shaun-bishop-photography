@extends('app')

@section('title', '| Home Page')

@section('content')

<!-- Page Content -->
<div class="container-fluid">
    <div class="row">
        <div class="col-xs-12">
            
        </div>
    </div>
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
                        <img src="/img/scotsRugbyTackle1580.JPG" alt="Scots rugby player running into a tackle"/>
                        <div class="carousel-caption">
                            <h1><a href="{{url('gallery/portfoliosport/')}}">Sport</a></h1>
                        </div>
                    </div>  

                    <div class="item">
                        <img src="/img/pinkPurpleFlower1580.JPG" alt="Picture of a purple flower"/>
                        <div class="carousel-caption">
                            <h1><a href="{{url('gallery/portfolionature/')}}">Nature</a></h1>
                        </div>
                    </div>

                    <div class="item">
                        <img src="/img/wellingtonSunset1580.JPG" alt="Picture of Wellington New Zealand sunrise with fountain in the harbour"/>
                        <div class="carousel-caption">
                            <h1><a href="{{url('gallery/portfolioscenic/')}}">Scenic</a></h1>
                        </div>
                    </div>

                    <div class="item">
                        <img src="/img/rugbyTeamCrop1580.JPG" alt="Rugby team photo of Wainuiomata High School"/>
                        <div class="carousel-caption">
                            <h1><a href="{{url('gallery/portfoliopeople/')}}">People</a></h1>
                        </div>
                    </div>

                    <div class="item">
                        <!-- <img src="/img/andyPortrait.jpg" alt="Steam Train"/> -->
                        <img src="/img/faceTreeDouble1580.JPG" alt="Composite image of face and tree in black and white"/>
                        <div class="carousel-caption">
                            <h1><a href="{{url('gallery/portfolioother/')}}">Other</a></h1>
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

@stop






