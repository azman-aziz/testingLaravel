{{-- 


	Tips = section di gunakan untuk meleletakan bagian yang tidak menyeluruh sifat nya 
	maka kita bisa gunakan section


 --}}

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>{{$title ?? 'Azman'}}</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
	<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />

</head>
<body>
	{{-- include untuk menginklude fle --}}
	@include('layout.navigation')

	{{-- yield di gunakan untuk mengirim dan di terima oleh section --}}
	<div class="py-4">
		@include('posts.alert')
		@yield('oke')	
	</div>
	
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
    $('.tag').select2({
    	placeholder: "choose "
    });
	});
</script>
</body>
</html>