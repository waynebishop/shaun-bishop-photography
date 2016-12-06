@extends('app')

@section('title', '| Blog Post')

@section('content')

	<h1>{{ $post->title }}</h1>

	<article>
		{{ $post->intro }}
	</article>

@stop