<!-- Error messages create and edit post form fields -->
@if ($errors->any())
	<ul class="alert alert-danger">
		@foreach ($errors->all() as $error)
			<li>{{ $error }}</li>	
		@endforeach
	</ul>
@endif