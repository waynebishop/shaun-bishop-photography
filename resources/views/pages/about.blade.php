@extends('app')

@section('title', '| About')

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
            <img class="img-responsive img-rounded" src="/img/shaunPhotographerJapan.png" alt="Image of Shaun Bishop photographer taking photographs at Scots College First XV rugby game at SANIX tournament in Japan in the year 2015">
        </div>

        <div class="col-sm-12 col-md-5"> 
            <h2 class="text-center">Photographer</h2>
            <p>I first gained an interest in photography through my father, who himself is a keen photographer. He is always there to grab hold of the camera when I am in the action, and seeing the impressive photographs he was taking made me want to try it for myself.</p>

            <p>I began to take photography more seriously during my final years of college, where I took Photography as an NCEA subject, as well as becoming the official photographer of the Scots College Supporters Club.</p>
        </div>
    </div>

    <hr class="hidden-xs hidden-sm">

    <div class="row">
        <div class="col-sm-12 col-md-7">            
            <p>This eventually led to me taking photos for the school at the junior graduation, and having the chance to travel to Japan with the College 1st XV as their team photographer for their games at the Sanix International College Rugby Tournament 2015.</p>

            <p>Aside from sports, I also enjoy taking photos of people at their private functions or at different events, as well as taking photos of nature at Wellington Zoo and the Botanical Gardens, landscape and scenic photography, and anything that else that interests me. </p>


        </div>

        <div class="col-sm-12 col-md-5"> 
            <p>I am now taking small photography jobs around Wellington to assist in the costs of my studies, as well as taking photos in my free time while focusing on my sports and studies.</p>
        </div>
    </div>

    <hr>

    <!-- Sportsperson -->    
    <div class="row post-row">            
        <div class="col-sm-12 col-md-5">
            <h2 class="text-center">Sportsperson</h2>
            <p>As a keen spectator of many sports, and having played a wide range of them, it is no wonder that my photography has been largely shaped around sports.</p>

            <p>I am a keen supporter of the Wellington Firebirds Cricket Team, Brisbane Heat Cricket team, San Antonio Spurs and Oklahoma City Thunder basketball teams, and of course the Blackcaps.</p>

            <p>During my years at Scots College, I was part of many teams, including the 1st XI cricket team for three years, social soccer and basketball teams, and was part of the athletics team for triple jump. I have also been involved in swimming, squash and touch rugby.</p>
        </div>

        <!-- Image Sportsperson -->
        <div class="col-sm-12 col-md-7">            
            <a href="blog_post.html">
                <img class="img-responsive img-rounded" src="/img/shaunbowling.jpg" alt="">
            </a>               
        </div>

    </div> <!-- Close Row -->

    <div class="row <!-- post-row -->">            
        <div class="col-sm-12 ">
            <h2 class="text-center">Looking ahead</h2>
            <p>Since leaving college many of my activities are still very much centred around sport. I am currently playing for North City Cricket Club, coaching a junior cricket team at Scots College, and studying Advanced Sports Management at the New Zealand Institute of Sport.</p>
        <!-- </div> -->
        
        <!-- <div class="col-sm-12 col-md-7"> -->
            <p>Looking to the future I hope to have a career involving sports in either a playing, coaching or management role, and of course continuing with my avid love of the camera.</p>            

        </div>
    </div> <!-- Close Row -->

@stop