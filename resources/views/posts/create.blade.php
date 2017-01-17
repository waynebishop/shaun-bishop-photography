@extends('app')

@section('title', '| Blog Create Post')

@section('content')
	<h1>Write a new Blog Post</h1>

	<hr>

	<!-- New create Gallery section -->

	<div class="col-md-12">
		@if (count($errors) > 0)
			<div class="alert alert-danger">
				<ul>
					@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
		@endif

	</div>

<!-- 	<h2>Create Gallery for Blog Post:</h2>
	<form class="form" method="POST" action="{{url('gallery/save')}}">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">

		<div class="form-group">
			<input type="text" name="gallery_name" id="gallery_name" placeholder="Name of the gallery" class="form-control" value="{{ old('gallery_name') }}">
		</div> -->

		<!-- Gallery Category -->
<!-- 		<div class="form-group">
			{!! Form::label('gallery_cat', 'Gallery Category:') !!}
			{!! Form::select('gallery_cat',[
		    	'Blogpost' => ['Blogpost' => 'Blogpost'],
		    	'Portfolio' => ['Sport' => 'Sport', 'Nature' => 'Nature', 'Scenic' => 'Scenic', 'People' => 'People', 'Other' => 'Other'],
			]); !!}
		</div>

		<button class="btn btn-primary">Save</button>		
	</form> -->

<?php

if(Session::has('data')) {
echo "Success";	
echo Session::get('data');
$galleryId = Session::get('data'); ?>
{!! Form::hidden('gallery_id', $galleryId) !!}
<?php
}

?>

<hr>

<!-- End new Gallery section -->


		{!! Form::open(['url' => 'posts', 'files' => true]) !!}

			@include ('posts._form', ['submitButtonText' => 'Add Post'])
			
		{!! Form::close() !!}

		@include ('errors/list')

	
@stop