@extends('app')

@section('content')

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
					<a href="{{ url('gallery/delete-image/' . $image->id) }}" class="btn btn-sm btn-danger delete-image-button">Delete</a>
				</li>
				@endforeach
			</ul>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-md-12">
		<form action="{{ url('image/do-upload') }} "
			class="dropzone"
			id="addImages"
		>
		{{ csrf_field() }}
		<input type="hidden" name="gallery_id" value={{ $gallery->id }}>				
		</form>
	</div>
</div>

<div class="row">
	<div class="col-md-12">
		<a href="{{url('gallery/list')}}" class="btn btn-primary">Back</a>
	</div>
</div>

@endsection