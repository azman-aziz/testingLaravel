@extends('layout.app', ['title' => 'Create Post'])

@section('oke')
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				@include('posts.alert')
				<div class="card">
					<div class="card-header">New Card</div>
					<div class="card-body">

						<form action="/posts/store" method="post">
							@csrf
							@include('posts.particial.form-control', ['submit' => 'Create'])
							
						</form>

					</div>
				</div>
			</div>
		</div>
	</div>
@stop