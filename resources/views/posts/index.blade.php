@extends('layout.app')

@section('oke')
	<div class="container">All Post

		<div class="row">
			

				@foreach($Post as $menu)
				<div class="col-md-4">
				<div class="card mb-3 ">
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
				@endforeach
				
			
		</div>
		<div class="row justify-content-center">
			{{$Post->links()}}
		</div>
		
	</div>
@stop