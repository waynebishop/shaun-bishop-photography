@extends('app')


@section('content')
<div class="row">
	<div class="col-md-12">
		<h1>My Portfolio - All Galleries</h1>
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

		@endif
	</div>
</div>

@endsection