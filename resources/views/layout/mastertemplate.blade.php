<!doctype html>
<html lang="{{ config('app.locale') }}">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>A Simple Laravel Blog - @yield('title')</title>
		<script type="text/javascript" src='/js/tinymce/tinymce.min.js'></script>
		<!-- Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
		<link href="/css/blog.css" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
		<!-- Styles -->

	</head>
<body>
<nav class="navbar navbar-default navbar-static-top">
	<div class="container">
		<div class="navbar-header">
			<a class="navbar-brand" href="/">Home</a>
		</div>
		<div class="collapse navbar-collapse" id="app-navbar-collapse">
			<!-- Left Side Of Navbar -->
			<ul class="nav navbar-nav">
				&nbsp;
			</ul>

			<!-- Right Side Of Navbar -->
			<ul class="nav navbar-nav navbar-right">
				<!-- Authentication Links -->
@if (Auth::check())
				<li><a href="/new">New post</a></li>
				<li><a href="/admin">Administration</a></li>
@else
				<li><a href="/login">Login</a></li>
				<li><a href="/register">Register</a></li>
@endif
			</ul>
		</div>
	</div>
</nav>
	
<div class="container">
	<div class="blog-header">
		<h1 class="blog-title">A Simple Blog</h1>
		<p class="lead blog-description">Just another barebones blog written in Laravel.</p>
	</div>

	<div class="row">
		<div class="col-sm-8 blog-main">
@yield('content')

		</div>
	</div>
</div>
<br>
<div class="panel panel-default">
  <div class="panel-body">
    <p class="text-center">(C) 2017 SomethingSomething</p>
  </div>
</div>
</body>
</html>
