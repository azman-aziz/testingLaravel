@extends('layout.app', ['title' => 'Create Post'])

@section('oke')
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="card">
					<div class="card-header">New Card</div>
					<div class="card-body">

						<form action="/posts/store" method="post">
							@csrf
							<div class="form-group">
								<label> title</label>
								<input type="text" name="title" id="title" class="form-control">
							</div>

							<div class="form-group">
								<label> Body</label>
								<textarea type="text" name="body" id="body" class="form-control"> </textarea>
							</div>

							<button type="submit" class="btn btn-primary">send</button>

						</form>

					</div>
				</div>
			</div>
		</div>
	</div>
@stop