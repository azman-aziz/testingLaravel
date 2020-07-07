@extends('layout.app')

@section('oke')
	<div class="container">
		{{-- @if($Post->count()) --}}

		<div class="row d-flex justify-content-between">
			
			<div>
				@isset($category)
				<h4>Category : {{$category->name}}</h4>
				@endisset

				@isset($tag)
				<h4>Tag : {{$tag->name}}</h4>
				@endisset

				@if(!isset($category) && !isset($tag))
				<h4>All Post</h4>
				@endif
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
							  <div class="card-footer d-flex justify-content-between">
							  	{{-- difForHumans = untuk menampilkan data terakhir --}}
							  	Publised at {{$menu->created_at->format('d F, Y')}}
							  	<a href="/posts/{{$menu->slug}}/edit" class="btn btn-success">Edit</a>
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