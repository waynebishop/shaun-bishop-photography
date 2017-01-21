<!-- Temporary -->
{!! Form::hidden('user_id', 2) !!}
<!-- {!! Form::hidden('gallery_id', 18) !!} -->



<!-- Choose a Gallery -->
<h2>Choose a Gallery for this Blog Post</h2>
<div class="form-group">
	{!! Form::label('gallery_id', 'Gallery for Blog Post:') !!}

	{!! Form::select('gallery_id',[
		'18' => 'Blogpost gallery',
    	'57' => 'Blogpost 2 gallery',
    	'58' => 'Blogpost 3 gallery',
	]); !!}

</div>

<h2>Create the Blog Post</h2>
<!-- Blog Type -->
<div class="form-group">
	{!! Form::label('post_type', 'Blog Post Type:') !!}
	{!! Form::select('post_type',[
    	'Photography' => 'Photography',
    	'Sport' => 'Sport',
    	'Other' => 'Other',
		]); !!}
</div>

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
	{!! Form::input('date','published_at', date('Y-m-d'), ['class' => 'form-control']) !!}			
</div>

<!-- Submit button -->
<div class="form-group">
	{!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}			
</div>