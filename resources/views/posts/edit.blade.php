@extends('app')

@section('title', '| Blog Edit Post')

@section('content')
	<h1>Edit: {!! $post->title !!} </h1>

		{!! Form::model($post, ['method' => 'PATCH', 'action' => ['PostsController@update', $post->id]]) !!}
			@include ('posts._form', ['submitButtonText' => 'Update Post'])
		{!! Form::close() !!}

		@include ('errors/list')

@stop