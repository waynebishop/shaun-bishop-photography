@extends('app')

@section('content')

<div class="row">
	<div class="col-md-12">
		<h1>{{$gallery->name}}</h1>
	</div>
</div>

<div class="row">
	<div class="col-md-12">
		<div id="gallery-images-viewonly">
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
		<a href="{{url('gallery/portfolio' . strtolower($gallery->gallery_cat))}}" class="btn btn-primary">Back</a>
	</div>
</div>

@endsection