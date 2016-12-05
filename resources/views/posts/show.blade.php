@extends('app')

@section('content')

	<div class="row">
		<div class="col-md-12">
			
			<h1>{{ $post->title }}</h1>



			<article>
			<p>{{ $post->intro }}</p>

			<p>{{ $post->body }}</p>
			</article>		

		</div>
	</div>

@stop