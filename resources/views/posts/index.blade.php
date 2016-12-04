@extends('app')

@section('content')

	<h1>Posts</h1>

	@foreach ($posts as $post)
		<article>
			<h2>
				<a href="/posts/{{ $post->id }} ">{{ $post->title }}</a>
			</h2>	

			<p>{{ $post->intro }}</p>

			<div class="body">{{ $post->body }}</div>

		</article>

	@endforeach


@stop

