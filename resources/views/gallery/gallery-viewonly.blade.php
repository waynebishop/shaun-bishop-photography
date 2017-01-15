@extends('app')

@section('content')

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
		<h1>{{$gallery->name}}</h1>
	</div>
</div>

<div class="row">
	<div class="col-md-12">
		<div id="gallery-images">
			<ul>
				@foreach ($gallery->images as $image)
				<li>
					<a href="{{ url($image->file_path) }}" data-lightbox="mygallery">
						<img src="{{ url('/gallery/images/thumbs/' . $image->file_name) }} " alt="gallery images">
					</a>
				</li>
				@endforeach
			</ul>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-md-12">
		<a href="{{url('gallery/portfolioall')}}" class="btn btn-primary">Back</a>
	</div>
</div>

@endsection