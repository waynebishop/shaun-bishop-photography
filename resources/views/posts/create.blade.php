@extends('app')

@section('content')
	<h1>Write a new article</h1>

	<hr>

	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			
			{!! Form::open(['url' => 'posts']) !!}
		
				<!-- title input -->
				<div class="form-group">
					{!! Form::label('title', 'Title:') !!}
					{!! Form::text('title', null, ['class' => 'form-control']) !!}			
				</div>

				<!-- intro input -->
				<div class="form-group">
					{!! Form::label('intro', 'Intro:') !!}
					{!! Form::textarea('intro', null, ['class' => 'form-control']) !!}			
				</div>
				
				<!-- body input -->
				<div class="form-group">
					{!! Form::label('body', 'Body:') !!}
					{!! Form::textarea('body', null, ['class' => 'form-control']) !!}			
				</div>

				<!-- Published at -->
				<div class="form-group">
					{!! Form::label('published_at', 'Publish On:') !!}
					{!! Form::input('date','published_at', null, ['class' => 'form-control']) !!}			
				</div>

				<!-- Submit button -->
				<div class="form-group">
					{!! Form::submit('Add Post', ['class' => 'btn btn-primary form-control']) !!}			
				</div>

			{!! Form::close() !!}

		</div>
	</div>

	
@stop