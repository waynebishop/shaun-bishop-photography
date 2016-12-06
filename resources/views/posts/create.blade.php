@extends('app')

@section('title', '| Blog Create Post')

@section('content')
	<h1>Write a new Blog Post</h1>

	<hr>

		
			{!! Form::open(['url' => 'posts']) !!}
				@include ('posts._form', ['submitButtonText' => 'Add Post'])
			{!! Form::close() !!}

			@include ('errors/list')
	
@stop