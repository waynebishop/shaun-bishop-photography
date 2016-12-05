@extends('app')

@section('content')
	<h1>Write a new article</h1>

	<hr>

		
			{!! Form::open(['url' => 'posts']) !!}
				@include ('posts._form', ['submitButtonText' => 'Add Post'])
			{!! Form::close() !!}

			@include ('errors/list')
	
@stop