{{-- 


	Tips = section di gunakan untuk meleletakan bagian yang tidak menyeluruh sifat nya 
	maka kita bisa gunakan section


 --}}

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>@yield('title')</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
</head>
<body>
	{{-- include untuk menginklude fle --}}
	@include('layout.navigation')

	{{-- yield di gunakan untuk mengirim dan di terima oleh section --}}
	<div class="py-4">
		@yield('oke')	
	</div>
	

</body>
</html>