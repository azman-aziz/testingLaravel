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
							<div class="form-group">
								<label for="title"> title</label>
								<input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror">
								{{-- menampilkan error validation --}}
								@error('title')
								<div class="mt-3 invalid-feedback" >
									{{$message}}
								</div>
									
								@enderror
							</div>

							<div class="form-group">
								<label for="body"> Body</label>
								<textarea type="text" name="body" id="body" class="form-control @error('body') is-invalid @enderror"> </textarea>

								{{-- menampilkan error validation --}}
								@error('body')
								<div class="mt-3 invalid-feedback" >
									{{$message}}
								</div>
									
								@enderror

							</div>

							<button type="submit" class="btn btn-primary">send</button>

						</form>

					</div>
				</div>
			</div>
		</div>
	</div>
@stop