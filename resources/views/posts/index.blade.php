@extends('layout.app')

@section('oke')
	<div class="container">
		{{-- @if($Post->count()) --}}

		<div class="row d-flex justify-content-between">
			
			<div>
				<h1>All Post</h1>
			</div>

			<div>
				<a href="/posts/create" class="btn btn-primary">Add Post</a>
			</div>
		</div>
	
	<hr>
		<div class="row">
				
				

					@forelse($Post as $menu)
						<div class="col-md-4">
							<div class="card mb-4 ">
							  <div class="card-header">
							    {{ $menu->title }}
							  </div>
							  <div class="card-body">
							    <h5 class="card-title">{{$menu->slug}}</h5>
							    <p class="card-text">{{Str::limit($menu->body,100, '')}}</p>
							    <a href="/posts/{{$menu->slug}}" class="btn btn-primary">Read More</a>
							  </div>
							  <div class="card-footer">
							  	{{-- difForHumans = untuk menampilkan data terakhir --}}
							  	Publised at {{$menu->created_at->format('d F, Y')}}
							  </div>
							</div>
						</div>
					@empty
						<div class="col-md-6 justify-content-center">
							<div class="alert alert-danger">
									there are nopost
							</div>
						</div>
					@endforelse

		</div>
		<div class="row justify-content-center">
			{{$Post->links()}}
		</div>
		{{-- @else
		<div class="row justify-content-center text-center">
			<div class="col-md-6 justify-content-center">
				<div class="alert alert-danger">
						there are nopost
				</div>
			</div>
		</div>
		@endif --}}
	</div>
@stop