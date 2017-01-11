<!-- Temporary -->
{!! Form::hidden('user_id', 2) !!}
{!! Form::hidden('gallery_id', 18) !!}
<!-- {!! Form::hidden('post_type', 'Sport') !!} -->	

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

<h2>Add Gallery:</h2>

<!-- Gallery Title -->
<div class="form-group">
	{!! Form::label('gallery_title', 'Gallery Title:') !!}
	{!! Form::text('gallery_title', null, ['class' => 'form-control']) !!}	
</div>

<!-- Gallery Category -->
<div class="form-group">
	{!! Form::label('gallery_cat', 'Gallery Category:') !!}
	{!! Form::select('gallery_cat',[
    	'Blogpost' => ['Blogpost' => 'Blogpost'],
    	'Homepage' => ['Homepage' => 'Homepage'],
    	'Portfolio' => ['Sport' => 'Sport', 'Nature' => 'Nature', 'Scenic' => 'Scenic', 'People' => 'People', 'Other' => 'Other'],
		]); !!}
</div>

<!-- Image -->
<!-- <div class="form-group">
	{!! Form::label('images', 'Add gallery images:') !!}
	{!! Form::file('images', ['multiple']); !!}			
</div> -->

<!-- Submit button -->
<div class="form-group">
	{!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}			
</div>