@extends('app')


@section('content')
<div class="row">
	<div class="col-md-12">
		<h1>My Galleries</h1>
	</div>
</div>

<div class="row">
	<div class="col-md-8">
		@if ($galleries->count() > 0)
			<table class="table table-striped table-bordered table-responsive">
				<thead>
					<tr class="info">
						<th>Name of the gallery</th>
						<th>Portfolio</th>
						<th>Maintain</th>
					</tr>
				</thead>

				<tbody>
					@foreach ($galleries as $gallery)
					<tr>
						<td>{{$gallery->name}}
							<span class="pull-right">
								{{ $gallery->images()->count() }}
							</span>
						</td>

						<td>{{$gallery->gallery_cat}}</td>

						<td><a href="{{url('gallery/view/' . $gallery->id)}}">Edit</a> / 
							<a href="{{url('gallery/delete/' . $gallery->id)}}">Delete</a>
						</td>
					</tr>
					@endforeach
				</tbody>

			</table>		

		@endif
	</div>


	<div class="col-md-4">
		@if (count($errors) > 0)
			<div class="alert alert-danger">
				<ul>
					@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
		@endif
		<h2>Create a new Gallery:</h2>
		<form class="form" method="POST" action="{{url('gallery/save')}}">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">

			<div class="form-group">
				<input type="text" name="gallery_name" id="gallery_name" placeholder="Name of the gallery" class="form-control" value="{{ old('gallery_name') }}">
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

			<button class="btn btn-primary">Save</button>		
		</form>
	</div>
</div>

@endsection