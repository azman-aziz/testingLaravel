<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
</head>
<body>
	{{-- include untuk menginklude fle --}}
	@include('layout.navigation')
	<h1>Hello World</h1>
	{{-- yield di gunakan untuk mengirim dan di terima oleh section --}}
	@yield('oke')

</body>
</html>