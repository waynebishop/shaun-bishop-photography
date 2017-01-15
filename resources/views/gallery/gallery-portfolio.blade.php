@extends('app')


@section('content')

<!-- Styling for thumbs -->
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
		<h1>Portfolio: {{$galleries->portfolioCat}}</h1>
	</div>
</div>

<div class="row">
	<div class="col-md-12">
		@if ($galleries->count() > 0)

			<table class="table table-striped table-bordered table-responsive">
				<thead>
					<tr class="info">
						<th>Name of the gallery</th>
						<th>Portfolio</th>
						<th>Thumbnails</th>
						<th>View?</th>
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
						<td class="portfolio-gallery-images">
								
								@if (count($gallery->images))

								<img src="{{ url('/gallery/images/thumbs/' . $gallery->images[0]->file_name) }}">

								@endif
															
<!-- 							@foreach ($gallery->images as $image)

								<a href="{{url('gallery/viewonly/' . $gallery->id)}}">
									<img src="{{ url('/gallery/images/thumbs/' . $image->file_name) }} " alt="gallery images">
								</a>

							@endforeach -->
							
						</td>
						<td><a href="{{url('gallery/viewonly/' . $gallery->id)}}">View</a></td>
					</tr>
					@endforeach
				</tbody>

			</table>		

		@endif
	</div>
</div>

@endsection