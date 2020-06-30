@extends('layout.app', ['title' => 'Update Post'])

@section('oke')
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				@include('posts.alert')
				<div class="card">
					<div class="card-header">Update Post : {{$post->title}}</div>
					<div class="card-body">

						<form action="/posts/{{$post->slug}}/edit" method="post">

						@include('posts.particial.form-control')
						</form>

					</div>
				</div>
			</div>
		</div>
	</div>
@stop