{{-- 

	jika kita menggunakan {{}} = maka otomatis filter htmlspesialcarst
	jika kita menggunakan {!! !!} = maka tidak ada fiter htmlspesialcars



 --}}

@extends('layout.app')
@section('title','Home')
{{-- section di gunakan untuk mengambil yield --}}
@section('oke')
	<div class="container">
		{{$name}}
		<h3>asda</h3>
		<h4>asdasgf</h4>
	</div>
	
@endsection