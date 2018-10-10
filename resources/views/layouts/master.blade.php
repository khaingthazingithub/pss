<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>
		@yield('title')
	</title>

	<link rel="stylesheet" href="/css/bootstrap.min.css">

	<link rel="stylesheet" href="/font-awesome-4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="/css/animate.css">

	<link rel="stylesheet" href="/css/style.css">
</head>
<body>

	@include('layouts.nav')

	@yield('content')

	@include('layouts.footer')

	<script src="/js/jquery.js"></script>

	<script src="/js/wow.min.js"></script>

	<script src="/js/bootstrap.min.js"></script>

	<script>
	  new WOW().init();
	</script>

</body>
</html>
