@extends('app')

@section('title', '| View Gallery')

@section('stylesheets')

<link rel="stylesheet" type="text/css" href="/dist/css/slider-pro.min.css" media="screen"/>
<link rel="stylesheet" type="text/css" href="/css/main.css" media="screen"/>

@stop <!-- end stylesheets section -->



@section('scripts')

<script type="text/javascript" src="/libs/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="/dist/js/jquery.sliderPro.min.js"></script>

<script type="text/javascript">
	$( document ).ready(function( $ ) {
		$( '#SBPslider' ).sliderPro({
			width: 960,
			height: 500,
			fade: true,
			arrows: true,
			buttons: false,
			fullScreen: true,
			shuffle: true,
			smallSize: 500,
			mediumSize: 1000,
			largeSize: 3000,
			thumbnailArrows: true,
			autoplay: false
		});
	});
</script>

@stop <!-- end scripts section -->



@section('content')

<!-- Gallery Title and Description-->
<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<h2 class="gallery-header">Gallery Example</h2>
			
			<!--<h2 class="gallery-header">A fine day for a game of cricket</h2>  -->
		</div>
	</div>
</div>	


<!-- Slider-pro gallery -->

<div id="SBPslider" class="slider-pro">
	<div class="sp-slides">
		<!-- Image 1 -->
		<div class="sp-slide">
			<img class="sp-image" src="/src/css/images/blank.gif" 
				data-src="/img/andyBatsman_Medium.jpg"
				data-small="/img/andyBatsman_Medium.jpg"
				data-medium="/img/andyBatsman_Medium.jpg"
				data-large="/img/andyBatsman_Large.jpg"
				data-retina="/img/andyBatsman_Large.jpg"/>
		</div>
		
		<!-- Image 2 -->
        <div class="sp-slide">
        	<img class="sp-image" src="/src/css/images/blank.gif" 
        		data-src="/img/bowler_Medium.jpg" 
				data-small="/img/bowler_Small.jpg"
				data-medium="/img/bowler_Medium.jpg"
				data-large="/img/bowler_Large.jpg"
        		data-retina="/img/bowler_Large.jpg"/>
		</div>

		<!-- Image 3 -->
		<div class="sp-slide">
			<img class="sp-image" src="/src/css/images/blank.gif" 
				data-src="http://bqworks.com/slider-pro/images/image3_medium.jpg" 
				data-small="http://bqworks.com/slider-pro/images/image3_small.jpg"
				data-medium="http://bqworks.com/slider-pro/images/image3_medium.jpg"
				data-large="http://bqworks.com/slider-pro/images/image3_large.jpg"
				data-retina="http://bqworks.com/slider-pro/images/image3_large.jpg"/>
		</div>

		<!-- Image 4 -->
		<div class="sp-slide">
			<img class="sp-image" src="/src/css/images/blank.gif" 
				data-src="http://bqworks.com/slider-pro/images/image4_medium.jpg" 
				data-small="http://bqworks.com/slider-pro/images/image4_small.jpg"
				data-medium="http://bqworks.com/slider-pro/images/image4_medium.jpg"
				data-large="http://bqworks.com/slider-pro/images/image4_large.jpg"
				data-retina="http://bqworks.com/slider-pro/images/image4_large.jpg"/>
		</div>

		<!-- Image 5 -->
		<div class="sp-slide">
			<img class="sp-image" src="/src/css/images/blank.gif" 
				data-src="http://bqworks.com/slider-pro/images/image5_medium.jpg" 
				data-small="http://bqworks.com/slider-pro/images/image5_small.jpg"
				data-medium="http://bqworks.com/slider-pro/images/image5_medium.jpg"
				data-large="http://bqworks.com/slider-pro/images/image5_large.jpg"
				data-retina="http://bqworks.com/slider-pro/images/image5_large.jpg"/>
		</div>

		<!-- Image 6 -->
		<div class="sp-slide">
			<img class="sp-image" src="/src/css/images/blank.gif" 
				data-src="http://bqworks.com/slider-pro/images/image6_medium.jpg" 
				data-small="http://bqworks.com/slider-pro/images/image6_small.jpg"
				data-medium="http://bqworks.com/slider-pro/images/image6_medium.jpg"
				data-large="http://bqworks.com/slider-pro/images/image6_large.jpg"
				data-retina="http://bqworks.com/slider-pro/images/image6_large.jpg"/>
		</div>

		<!-- Image 7 -->
		<div class="sp-slide">
			<img class="sp-image" src="/src/css/images/blank.gif" 
				data-src="http://bqworks.com/slider-pro/images/image7_medium.jpg" 
				data-small="http://bqworks.com/slider-pro/images/image7_small.jpg"
				data-medium="http://bqworks.com/slider-pro/images/image7_medium.jpg"
				data-large="http://bqworks.com/slider-pro/images/image7_large.jpg"
				data-retina="http://bqworks.com/slider-pro/images/image7_large.jpg"/>
		</div>
		
		<!-- Image 8 -->
		<div class="sp-slide">
			<img class="sp-image" src="/src/css/images/blank.gif" 
				data-src="http://bqworks.com/slider-pro/images/image8_medium.jpg" 
				data-small="http://bqworks.com/slider-pro/images/image8_small.jpg"
				data-medium="http://bqworks.com/slider-pro/images/image8_medium.jpg"
				data-large="http://bqworks.com/slider-pro/images/image8_large.jpg"
				data-retina="http://bqworks.com/slider-pro/images/image8_large.jpg"/>
		</div>

		<!-- Image 9 -->
		<div class="sp-slide">
			<img class="sp-image" src="/src/css/images/blank.gif" 
				data-src="http://bqworks.com/slider-pro/images/image9_medium.jpg" 
				data-small="http://bqworks.com/slider-pro/images/image9_small.jpg"
				data-medium="http://bqworks.com/slider-pro/images/image9_medium.jpg"
				data-large="http://bqworks.com/slider-pro/images/image9_large.jpg"
				data-retina="http://bqworks.com/slider-pro/images/image9_large.jpg"/>
		</div>
		
		<!-- Image 10 -->
		<div class="sp-slide">
			<img class="sp-image" src="/src/css/images/blank.gif" 
				data-src="http://bqworks.com/slider-pro/images/image10_medium.jpg" 
				data-small="http://bqworks.com/slider-pro/images/image10_small.jpg"
				data-medium="http://bqworks.com/slider-pro/images/image10_medium.jpg"
				data-large="http://bqworks.com/slider-pro/images/image10_large.jpg"
				data-retina="http://bqworks.com/slider-pro/images/image10_large.jpg"/>
		</div>
	</div>

	<div class="sp-thumbnails">
		<!-- Image 1 -->
		<img class="sp-thumbnail" src="img/andyBatsman_Thumbnail.jpg"/>
		<!-- Image 2 -->
		<img class="sp-thumbnail" src="img/bowler_Thumbnail.jpg"/>
		<!-- Image 3 -->
		<img class="sp-thumbnail" src="http://bqworks.com/slider-pro/images/image3_thumbnail.jpg"/>
		<!-- Image 4 -->
		<img class="sp-thumbnail" src="http://bqworks.com/slider-pro/images/image4_thumbnail.jpg"/>
		<!-- Image 5 -->
		<img class="sp-thumbnail" src="http://bqworks.com/slider-pro/images/image5_thumbnail.jpg"/>
		<!-- Image 6 -->
		<img class="sp-thumbnail" src="http://bqworks.com/slider-pro/images/image6_thumbnail.jpg"/>
		<!-- Image 7 -->
		<img class="sp-thumbnail" src="http://bqworks.com/slider-pro/images/image7_thumbnail.jpg"/>
		<!-- Image 8 -->
		<img class="sp-thumbnail" src="http://bqworks.com/slider-pro/images/image8_thumbnail.jpg"/>
		<!-- Image 9 -->
		<img class="sp-thumbnail" src="http://bqworks.com/slider-pro/images/image9_thumbnail.jpg"/>
		<!-- Image 10 -->
		<img class="sp-thumbnail" src="http://bqworks.com/slider-pro/images/image10_thumbnail.jpg"/>
	</div>
</div>

@stop