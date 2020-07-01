@extends('layout.app')

@section('title', $post->title)

@section('oke')
	<div class="container">
		<h1>{{$post->title}}</h1>
		<p>{{$post->body}}</p>

		<!-- Button trigger modal -->
<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">
  hapus
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Apakah anda yakin?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
		<div>
			<div> Title : {{$post->title}}</div>
			<div class="text-secondary"><small> Published : {{$post->created_at->format("d, F Y")}} </small></div>
		</div>


        <div>
			<form action="/posts/{{$post->slug}}/delete" method="post"> 
			@csrf
			@method('delete')

					<div class="d-flex mt-mb-3 justify-content-end">
					<button type="button" class="btn btn-secondary mr-3" data-dismiss="modal">Close</button>
		       		<button type="submit" class="btn btn-danger">Delete</button>
		       		</div>
			</form>
		</div>
      </div>
    </div>
  </div>
</div>
		
	</div>
@endsection