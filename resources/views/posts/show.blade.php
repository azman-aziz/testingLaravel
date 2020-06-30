@extends('layout.app')

@section('title', $post->title)

@section('oke')
	<div class="container">
		<h1>{{$post->title}}</h1>
		<p>{{$post->body}}</p>
		
	</div>
@endsection