@extends('app')

@section('title', '| Blog Post Index')

@section('content')

<!-- Page heading -->
<div class="row">
    <div class="col-sm-12">
        <h1 class="page-header gallery-header">Good Chat</h1>
    </div>
</div>
<!-- /.row -->

<!-- Top Wells -->
<div class="row">

    <!-- Tags Well -->
    
    <div class="col-sm-7">
        <div class="well search-well">
            <a href="#" class="btn btn-md btn-primary"><span class="glyphicon glyphicon-camera" aria-hidden="true"></span> Photography</a>

            <a href="#" class="btn btn-md btn-primary"><span class="glyphicon glyphicon-star" aria-hidden="true"></span> Sport</a>
     
            <a href="#" class="btn btn-md btn-primary"><span class="glyphicon glyphicon-grain" aria-hidden="true"></span> Other</a>
        </div>        
    </div>

    <!-- Search Well -->
    <div class="col-sm-5">
        <div class="well">
                               
            <form action="" method="post">
                <div class="input-group">
                    <input type="search" name="search" class="form-control" placeholder="Search title and article only.">
                    <span class="input-group-btn">
                    <button type="submit" class="btn btn-sm btn-default">
                        <a href="#" class="btn btn-xs btn-primary"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></a>
                    </button>
                    </span>
                </div>
                <!-- /.input-group -->
            </form>

        </div>        
    </div>
</div>


<!-- DYNAMIC CONTENT -->

<hr>

@foreach ($posts as $post)
	<article>

		<!-- Post Row 1 -->
		<!-- Image for Post 1 -->
		<div class="row post-row">
		    <div class="col-sm-12 col-md-7">            
		         <a href="/posts/{{ $post->id }}">
		            <img class="img-responsive img-rounded" src="img/andyBatsman_Medium.jpg" alt="">
		        </a>
		    </div>    
		    <!-- Text for MD and LG Screens -->
		    <div class="col-sm-12 col-md-5 hidden-sm hidden-xs"> 
		        <h2 class="text-left"><a href="/posts/{{ $post->id }}">{{ $post->title }}</a></h2>
		        <p class="text-left"><a href="#" class="btn btn-xs btn-primary"><span class="glyphicon glyphicon-star" aria-hidden="true"></span> Sport</a><small> Author: <span>Shaun Bishop</span></p>
		        <p>Created: <span>{{ $post->created_at }}</span> Updated: <span>{{ $post->updated_at }}</span></small></p>
		        <p class="lead text-left">{{ $post->intro }}</p>
		        <a href="/posts/{{ $post->id }}" class="btn btn-info btn-md pull-left">Read More</a>
                <a href="/posts/{{ $post->id }}#disqus_thread" class="btn btn-default btn-md pull-left">Comment Count</a>         
		    </div>

		    <!-- Text for SM and XS Screens -->
		    <div class="col-sm-12 col-md-5 hidden-md hidden-lg"> 
		        <h2 class="text-center"><a href="/posts/{{ $post->id }}">{{ $post->title }}</a></h2>
		        <p><a href="#" class="btn btn-xs btn-primary"><span class="glyphicon glyphicon-star" aria-hidden="true"></span> Sport</a><small> Author: <span>Shaun Bishop</span></p>
		        <p>Created: <span>{{ $post->created_at }} </span>Updated: <span>{{ $post->updated_at }} </span></small></p>
		        <p>{{ $post->intro }}</p>
		        <a href="/posts/{{ $post->id }}" class="btn btn-info pull-left">Read More</a>
                <a href="/posts/{{ $post->id }}#disqus_thread" class="btn btn-default btn-md pull-left">Comment Count</a>

		    </div>

		</div> <!-- Close Post Row 1 -->


	</article>
    <hr>
@endforeach

<!-- OLD STATIC CONTENT -->
	
<!-- Page Heading -->
<div class="row">
    <div class="col-sm-12">
        <h1 class="page-header gallery-header">Good Chat</h1>
    </div>
</div>
<!-- /.row -->

<div class="row">

	<!-- Tags Well -->
    
    <div class="col-sm-7">
        <div class="well search-well">
            <a href="#" class="btn btn-md btn-primary"><span class="glyphicon glyphicon-camera" aria-hidden="true"></span> Photography</a>

            <a href="#" class="btn btn-md btn-primary"><span class="glyphicon glyphicon-star" aria-hidden="true"></span> Sport</a>
     
            <a href="#" class="btn btn-md btn-primary"><span class="glyphicon glyphicon-grain" aria-hidden="true"></span> Other</a>
        </div>        
    </div>

	<!-- Search Well -->
    <div class="col-sm-5">
        <div class="well">
                               
            <form action="" method="post">
                <div class="input-group">
                    <input type="search" name="search" class="form-control" placeholder="Search title and article only.">
                    <span class="input-group-btn">
                    <button type="submit" class="btn btn-sm btn-default">
                        <a href="#" class="btn btn-xs btn-primary"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></a>
                    </button>
                    </span>
                </div>
                <!-- /.input-group -->
            </form>

        </div>        
    </div>
</div>

<hr>

<!-- Blog Roll -->

<!-- Post Row 1 -->
<!-- Image for Post 1 -->
<div class="row post-row">
    <div class="col-sm-12 col-md-7">            
         <a href="">
            <img class="img-responsive img-rounded" src="img/andyBatsman_Medium.jpg" alt="">
        </a>
    </div>    
    <!-- Text for MD and LG Screens -->
    <div class="col-sm-12 col-md-5 hidden-sm hidden-xs"> 
        <h2 class="text-left">Medium: A good day with the bat.</h2>
        <p class="text-left"><a href="#" class="btn btn-xs btn-primary"><span class="glyphicon glyphicon-star" aria-hidden="true"></span> Sport</a><small> Author: <span>Shaun Bishop</span></p>
        <p>Created: <span>16 Nov 2016 </span> Updated: <span>20 Nov 2016 </span></small></p>
        <p class="lead text-left">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt vitae repellat non cum atque dolores consequuntur dolore consectetur adipisicing elit... </p>
        <a href="blog_post.html" class="btn btn-info pull-left">Read More</a>         
    </div>

    <!-- Text for SM and XS Screens -->
    <div class="col-sm-12 col-md-5 hidden-md hidden-lg"> 
        <h2 class="text-center">Small: A good day with the bat.</h2>
        <p><a href="#" class="btn btn-xs btn-primary"><span class="glyphicon glyphicon-star" aria-hidden="true"></span> Sport</a><small> Author: <span>Shaun Bishop</span></p>
        <p>Created: <span>16 Nov 2016 </span>Updated: <span>20 Nov 2016 </span></small></p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt vitae repellat non cum atque dolores consequuntur dolore consectetur adipisicing elit... </p>
        <a href="blog_post.html" class="btn btn-info pull-left">Read More</a>         
    </div>

</div> <!-- Close Post Row 1 --> 

<!-- Post Row 2 -->    
<div class="row post-row">
    <!-- Text for MD and LG Screens -->            
    <div class="col-sm-12 col-md-5 hidden-sm hidden-xs">
        <h2 class="text-right">Medium: Left nothing on the table.</h2>
        <p class="text-right"><a href="#" class="btn btn-xs btn-primary"><span class="glyphicon glyphicon-camera" aria-hidden="true"></span> Photography</a><small> Author: <span>Shaun Bishop</span></p>
        <p class="text-right">Created: <span>16 Nov 2016 </span>Updated: <span>20 Nov 2016 </span></small></p>
        <p class="lead text-right">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt vitae repellat non cum atque dolores consequuntur dolore consectetur adipisicing elit...</p>
        <a href="" class="btn btn-info pull-right">Read More</a>
    </div>
    
    <!-- Image for Post -->
    <div class="col-sm-12 col-md-7">            
        <a href="blog_post.html">
            <img class="img-responsive img-rounded" src="img/bowler_Medium.jpg" alt="">
        </a>               
    </div>

    <!-- Text for SM and XS Screens -->    
    <div class="col-sm-12 col-md-5 hidden-md hidden-lg">
        <h2 class="text-center">Small: Left nothing on the table.</h2>
        <p><a href="#" class="btn btn-xs btn-primary"><span class="glyphicon glyphicon-camera" aria-hidden="true"></span> Photography</a><small> Author: <span>Shaun Bishop</span></p>
        <p> Created: <span>16 Nov 2016 </span>Updated: <span>20 Nov 2016 </span></small></p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt vitae repellat non cum atque dolores consequuntur dolore consectetur adipisicing elit...</p> 
        <a href="" class="btn btn-info">Read More</a>
    </div>

</div> <!-- Close Post Row 2 -->
        
<!-- Post Row 3 -->
<!-- Image for Post 3 -->
<div class="row post-row">
    <div class="col-sm-12 col-md-7">            
         <a href="">
            <img class="img-responsive img-rounded" src="img/andyBatsman_Medium.jpg" alt="">
        </a>
    </div>    
    <!-- Text for MD and LG Screens -->
    <div class="col-sm-12 col-md-5 hidden-sm hidden-xs"> 
        <h2 class="text-left">Medium: Solid 50 on tough day.</h2>
        <p class="text-left"><a href="#" class="btn btn-xs btn-primary"><span class="glyphicon glyphicon-star" aria-hidden="true"></span> Sport</a><small> Author: <span>Shaun Bishop</span></p>
        <p>Created: <span>16 Nov 2016 </span>Updated: <span>20 Nov 2016 </span></small></p>
        <p class="lead text-left">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt vitae repellat non cum atque dolores consequuntur dolore consectetur adipisicing elit... </p>
        <a href="blog_post.html" class="btn btn-info pull-left">Read More</a>         
    </div>

    <!-- Text for SM and XS Screens -->
    <div class="col-sm-12 col-md-5 hidden-md hidden-lg"> 
        <h2 class="text-center">Small: Solid 50 on tough day.</h2>
        <p><a href="#" class="btn btn-xs btn-primary"><span class="glyphicon glyphicon-star" aria-hidden="true"></span> Sport</a><small> Author: <span>Shaun Bishop</span></p>
        <p>Created: <span>16 Nov 2016 </span>Updated: <span>20 Nov 2016 </span></small></p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt vitae repellat non cum atque dolores consequuntur dolore consectetur adipisicing elit... </p>
        <a href="blog_post.html" class="btn btn-info pull-left">Read More</a>         
    </div>

</div> <!-- Close Post Row 3 --> 

<!-- Post Row 4 -->    
<div class="row post-row">
    <!-- Text for MD and LG Screens -->            
    <div class="col-sm-12 col-md-5 hidden-sm hidden-xs">
        <h2 class="text-right">Medium: The old trooper fires at Whitby.</h2>
        <p class="text-right"><a href="#" class="btn btn-xs btn-primary"><span class="glyphicon glyphicon-star" aria-hidden="true"></span> Sport</a><small> Author: <span>Shaun Bishop</span></p>
        <p class="text-right">Created: <span>16 Nov 2016 </span>Updated: <span>20 Nov 2016 </span></small></p>
        <p class="lead text-right">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt vitae repellat non cum atque dolores consequuntur dolore consectetur adipisicing elit...</p>
        <a href="" class="btn btn-info pull-right">Read More</a>
    </div>
    
    <!-- Image for Post -->
    <div class="col-sm-12 col-md-7">            
        <a href="blog_post.html">
            <img class="img-responsive img-rounded" src="img/bowler_Medium.jpg" alt="">
        </a>               
    </div>

    <!-- Text for SM and XS Screens -->    
    <div class="col-sm-12 col-md-5 hidden-md hidden-lg">
        <h2 class="text-center">Small: The old trooper fires at Whitby.</h2>
        <p><a href="#" class="btn btn-xs btn-primary"><span class="glyphicon glyphicon-star" aria-hidden="true"></span> Sport</a><small> Author: <span>Shaun Bishop</span></p>
        <p> Created: <span>16 Nov 2016 </span>Updated: <span>20 Nov 2016 </span></small></p>
        <p >Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt vitae repellat non cum atque dolores consequuntur dolore consectetur adipisicing elit...</p>
        <a href="" class="btn btn-info">Read More</a>
    </div>

</div> <!-- Close Post Row 4 -->

<!-- Post Row 5 -->
<!-- Image for Post 5 -->
<div class="row post-row">
    <div class="col-sm-12 col-md-7">            
         <a href="">
            <img class="img-responsive img-rounded" src="img/andyBatsman_Medium.jpg" alt="">
        </a>
    </div>    
    <!-- Text for MD and LG Screens -->
    <div class="col-sm-12 col-md-5 hidden-sm hidden-xs"> 
        <h2 class="text-left">Medium: A good day with the bat.</h2>
        <p class="text-left"><a href="#" class="btn btn-xs btn-primary"><span class="glyphicon glyphicon-star" aria-hidden="true"></span> Sport</a><small> Author: <span>Shaun Bishop</span></p>
        <p>Created: <span>16 Nov 2016 </span>Updated: <span>20 Nov 2016 </span></small></p>
        <p class="lead text-left">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt vitae repellat non cum atque dolores consequuntur dolore consectetur adipisicing elit... </p>
        <a href="blog_post.html" class="btn btn-info pull-left">Read More</a>         
    </div>

    <!-- Text for SM and XS Screens -->
    <div class="col-sm-12 col-md-5 hidden-md hidden-lg"> 
        <h2 class="text-center">Small: A good day with the bat.</h2>
        <p><a href="#" class="btn btn-xs btn-primary"><span class="glyphicon glyphicon-star" aria-hidden="true"></span> Sport</a><small> Author: <span>Shaun Bishop</span></p>
        <p>Created: <span>16 Nov 2016 </span>Updated: <span>20 Nov 2016 </span></small></p>
        <p >Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt vitae repellat non cum atque dolores consequuntur dolore consectetur adipisicing elit... </p>
        <a href="blog_post.html" class="btn btn-info pull-left">Read More</a>         
    </div>

</div> <!-- Close Post Row 5 --> 

<!-- Post Row 6 -->    
<div class="row post-row">
    <!-- Text for MD and LG Screens -->            
    <div class="col-sm-12 col-md-5 hidden-sm hidden-xs">
        <h2 class="text-right">Medium: Left nothing on the table.</h2>
        <p class="text-right"><a href="#" class="btn btn-xs btn-primary"><span class="glyphicon glyphicon-star" aria-hidden="true"></span> Sport</a><small> Author: <span>Shaun Bishop</span></p>
        <p class="text-right">Created: <span>16 Nov 2016 </span>Updated: <span>20 Nov 2016 </span></small></p>
        <p class="lead text-right">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt vitae repellat non cum atque dolores consequuntur dolore consectetur adipisicing elit...</p>
        <a href="" class="btn btn-info pull-right">Read More</a>
    </div>
    
    <!-- Image for Post -->
    <div class="col-sm-12 col-md-7">            
        <a href="blog_post.html">
            <img class="img-responsive img-rounded" src="img/bowler_Medium.jpg" alt="">
        </a>               
    </div>

    <!-- Text for SM and XS Screens -->    
    <div class="col-sm-12 col-md-5 hidden-md hidden-lg">
        <h2 class="text-center">Small: Left nothing on the table.</h2>
        <p><a href="#" class="btn btn-xs btn-primary"><span class="glyphicon glyphicon-star" aria-hidden="true"></span> Sport</a><small> Author: <span>Shaun Bishop</span></p>
        <p> Created: <span>16 Nov 2016 </span>Updated: <span>20 Nov 2016 </span></small></p>
        <p >Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt vitae repellat non cum atque dolores consequuntur dolore consectetur adipisicing elit...</p>
        <a href="" class="btn btn-info">Read More</a>
    </div>

</div> <!-- Close Post Row 6 -->


<!-- Pagination -->
<div class="row text-center">
    <div class="col-lg-12">
        <ul class="pagination">
            <li>
                <a href="#">&laquo;</a>
            </li>
            <li class="active">
                <a href="#">1</a>
            </li>
            <li>
                <a href="#">2</a>
            </li>
            <li>
                <a href="#">3</a>
            </li>
            <li>
                <a href="#">4</a>
            </li>
            <li>
                <a href="#">5</a>
            </li>
            <li>
                <a href="#">&raquo;</a>
            </li>
        </ul>
    </div>
</div>
<!-- /.row -->

@stop

