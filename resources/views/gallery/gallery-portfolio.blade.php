@extends('app')


@section('content')

// Stying for thumbs
<style type="text/css">
	#gallery-images img {
		width: 240px;
		height: 160px;
		border: 2px solid black;
		margin-bottom: 10px;
	}
	#gallery-images ul {
		margin: 0;
		padding: 0;
	}
	#gallery-images li {
		margin: 0;
		padding: 0;
		list-style: none;
		float: left;
		padding-right: 10px;
	}
</style>

<div class="row">
	<div class="col-md-12">
		<h1>My Portfolio</h1>
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
						<th></th>
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
						<td><a href="{{url('gallery/viewonly/' . $gallery->id)}}">View</a></td>
					</tr>
					@endforeach
				</tbody>

			</table>

			<div class="row">
				<div class="col-md-12">
					<div id="gallery-images">
						<ul>
							@foreach ($gallery->images as $image)
							<li>
								<a href="{{ url($image->file_path) }}" data-lightbox="mygallery">
									<img src="{{ url('/gallery/images/thumbs/' . $image->file_name) }} " alt="gallery images">
								</a>
							</li>

							@endforeach
						</ul>
					</div>
				</div>
			</div>		

		@endif
	</div>
</div>

@endsection