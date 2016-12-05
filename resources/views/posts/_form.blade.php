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