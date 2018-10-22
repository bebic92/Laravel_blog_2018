<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" href="../../../../favicon.ico">

	<title>Laravel blog</title>

	<!-- Bootstrap core CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<!-- Custom styles for this template -->
	<link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
	<link href="/css/blog.css" rel="stylesheet">
</head>

<body>

	<div class="container">
		<header class="blog-header py-3">
			<div class="row flex-nowrap justify-content-between align-items-center">
				<div class="col-4 pt-1">
					
				</div>
				<div class="col-4 text-center">
					<a class="blog-header-logo text-dark" href="/">Laravel blog</a>
				</div>
				<div class="col-4 d-flex justify-content-end align-items-center">
					<a class="btn btn-sm btn-outline-secondary" href="/logout">Odjavi se</a>
				</div>
			</div>
		</header>

		@include('layouts.navigation')

		@include('layouts.header')

		<main role="main" class="container">

			<div class="row">
				<div class="col-md-8 blog-main">
						
						@yield('content')
				
				</div>

					@include('layouts.side-bar')
			</div><!-- /.row -->

		</main><!-- /.container -->
		
		@include('layouts.footer')