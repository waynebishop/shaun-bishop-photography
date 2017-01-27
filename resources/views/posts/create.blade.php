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