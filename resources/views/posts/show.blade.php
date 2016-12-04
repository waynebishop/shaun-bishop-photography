@extends('app')

@section('content')

	<h1>{{ $post->title }}</h1>

	<article>
		{{ $post->intro }}
	</article>

@stop