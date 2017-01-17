@extends('app')


@section('content')

<!-- Styling for thumbs -->
<style type="text/css">
	#gallery-images img {
		width: 240px;
		height: 160px;
		border: 2px solid black;
		margin-bottom: 10px;
	}
	#gallery-images ul {
		margin: 0;
		padding: 0;
	}
	#gallery-images li {
		margin: 0;
		padding: 0;
		list-style: none;
		float: left;
		padding-right: 10px;
	}
</style>

<div class="row">
	<div class="col-md-12">
		<h1>Portfolio: {{$galleries->portfolioCat}}</h1>
		<hr>
	</div>
</div>

<div class="row">
	<div class="col-md-12">
		@if ($galleries->count() > 0)
			@foreach ($galleries as $gallery)

				@if (count($gallery->images))
			
					<div class="col-md-3">
						<a href="{{url('gallery/viewonly/' . $gallery->id)}}">
							<img class="portfolio-gallery-images" src="{{ url('/gallery/images/thumbs/' . $gallery->images[0]->file_name) }}">
						</a>
						<br>
						<a href="{{url('gallery/viewonly/' . $gallery->id)}}">{{$gallery->name}}</a>
						<br>
						<a class="btn btn-default" href="{{url('gallery/portfolio' . strtolower($gallery->gallery_cat))}}">{{$gallery->gallery_cat}}</a>
						<a class="btn btn-primary" href="{{url('gallery/viewonly/' . $gallery->id)}}">View</a>
						<hr>
						
					</div>
			
				@endif

			@endforeach		

		@endif
	</div>
</div>

@endsection