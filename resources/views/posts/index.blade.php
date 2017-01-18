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

<!-- PHP $postcounter variable set to 0 -->

<?php
$var = (count($posts));
$postcounter = 0;
?>

<!-- Start Post loop -->

@foreach ($posts as $post) 

<article>
	
    <!-- The $postcounter is initially set to 0 above. On first pass at end of foreach increments by 1. -->
    <!-- Then on next pass when increments by 1 to to 2 it will reset to 0. -->
    <!-- So $postcounter will always be 0 (show Post Row Image Left) or 1 (show Post Row Image Right) pe rbelow. --> 


    <!-- if $postcounter is 0 then show Post Row Image LEFT layout -->
       
    @if ($postcounter === 0)

    <!-- Post Row 1 -->
	<!-- Image for Post 1 -->
	<div class="row post-row">
	    <div class="col-sm-12 col-md-7">
           
	         <a href="/posts/{{ $post->id }}">
                
	            @if ($galleries->count() > 0)
                    
                    @foreach ($galleries as $gallery)

                        @if ($gallery->id == $post->gallery_id)

                            @if (count($gallery->images))

                                <img class="img-responsive img-rounded" src="{{ url('/gallery/images/thumbs/' . $gallery->images[0]->file_name) }}" alt="">

                            @endif

                        @endif

                    @endforeach     

                @endif

	        </a>
	    </div>    
	    <!-- Text for MD and LG Screens -->
	    <div class="col-sm-12 col-md-5 hidden-sm hidden-xs"> 
	        <h2 class="text-left"><a href="/posts/{{ $post->id }}">{{ $post->title }}</a></h2>
	        <p class="text-left"><a href="#" class="btn btn-xs btn-primary"><span class="glyphicon glyphicon-star" aria-hidden="true"></span> Sport</a><small> Author: <span>Shaun Bishop</span></p>
	        <p>Created: <span>{{ $post->created_at }}</span> Updated: <span>{{ $post->updated_at }}</span></small></p>
	        <p class="text-left">{{ substr($post->intro, 0, 180) }}{{ strlen($post->intro) > 180 ? '...' : "" }}</p>
	        <a href="/posts/{{ $post->id }}" class="btn btn-info btn-md pull-left">Read More</a>
            <!-- <a href="/posts/{{ $post->id }}#disqus_thread" class="btn btn-default btn-md pull-left">Comment Count</a> -->         
	    </div>

	    <!-- Text for SM and XS Screens -->
	    <div class="col-sm-12 col-md-5 hidden-md hidden-lg"> 
	        <h2 class="text-center"><a href="/posts/{{ $post->id }}">{{ $post->title }}</a></h2>
	        <p><a href="#" class="btn btn-xs btn-primary"><span class="glyphicon glyphicon-star" aria-hidden="true"></span> Sport</a><small> Author: <span>Shaun Bishop</span></p>
	        <p>Created: <span>{{ $post->created_at }}</span>Updated: <span>{{ $post->updated_at }}</span></small></p>
	        <p>{{ substr($post->intro, 0, 180) }}{{ strlen($post->intro) > 180 ? '...' : "" }}</p>
	        <a href="/posts/{{ $post->id }}" class="btn btn-info pull-left">Read More</a>
            <!-- <a href="/posts/{{ $post->id }}#disqus_thread" class="btn btn-default btn-md pull-left">Comment Count</a> -->

	    </div>

	</div> <!-- Close Post Row 1 -->

    <!-- If $postcounter is not 0 ie is 1 then show Post Row Image RIGHT  -->

    @else 

    <!-- Post Row 2 -->    
    <div class="row post-row">
        <!-- Text for MD and LG Screens -->            
        <div class="col-sm-12 col-md-5 hidden-sm hidden-xs">
            <h2 class="text-right"><a href="/posts/{{ $post->id }}">{{ $post->title }}</a></h2>
            <p class="text-right"><a href="#" class="btn btn-xs btn-primary"><span class="glyphicon glyphicon-camera" aria-hidden="true"></span> Photography</a><small> Author: <span>Shaun Bishop</span></p>
            <p class="text-right">Created: <span>{{ $post->created_at }}</span>Updated: <span>{{ $post->updated_at }}</span></small></p>
                <p class="text-right">{{ substr($post->intro, 0, 180) }}{{ strlen($post->intro) > 180 ? '...' : "" }}</p>
            <a href="/posts/{{ $post->id }}" class="btn btn-info pull-right">Read More</a>
            <!-- <a href="/posts/{{ $post->id }}#disqus_thread" class="btn btn-default btn-md pull-right">Comment Count</a> --> 
        </div>
        
        <!-- Image for Post -->
        <div class="col-sm-12 col-md-7">
            
            <a href="/posts/{{ $post->id }}">

                @if ($galleries->count() > 0)
                        
                    @foreach ($galleries as $gallery)

                        @if ($gallery->id == $post->gallery_id)

                            @if (count($gallery->images))

                                <img class="img-responsive img-rounded" src="{{ url('/gallery/images/thumbs/' . $gallery->images[0]->file_name) }}" alt="">

                            @endif

                        @endif

                    @endforeach     

                @endif

            </a>

        </div>

        <!-- Text for SM and XS Screens -->    
        <div class="col-sm-12 col-md-5 hidden-md hidden-lg">
            <h2 class="text-center"><a href="/posts/{{ $post->id }}">{{ $post->title }}</a></h2>
            <p><a href="#" class="btn btn-xs btn-primary"><span class="glyphicon glyphicon-camera" aria-hidden="true"></span> Photography</a><small> Author: <span>Shaun Bishop</span></p>
            <p> Created: <span>{{ $post->created_at }}</span>Updated: <span>{{ $post->updated_at }}</span></small></p>
            <p>{{ substr($post->intro, 0, 180) }}{{ strlen($post->intro) > 180 ? '...' : "" }}</p> 
            <a href="/posts/{{ $post->id }}" class="btn btn-info">Read More</a>
            <!-- <a href="/posts/{{ $post->id }}#disqus_thread" class="btn btn-default btn-md">Comment Count</a> --> 
        </div>

    </div> <!-- Close Post Row 2 -->
   
    @endif   <!-- The for/else loop ends -->

    <hr>

</article> <!-- End of single post/article -->

<!-- Increment $postcounter by 1, but if this sums to 2 then reset to 0. So will always be 0 or 1 for every foreach loop  -->
<? 
    $postcounter++;
    if($postcounter === 2) {
        $postcounter = 0;
    };
?>

@endforeach <!-- End of post loop -->


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


@stop  <!-- End of page content -->

