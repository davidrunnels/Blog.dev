@extends('layouts.master')

@section('title')
- Contact
@stop

@section('top-scripts')
<!-- Bootstrap -->
<link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<!-- Font Awesome -->
<link rel="stylesheet" href="/font-awesome-4.2.0/css/font-awesome.min.css">

<link rel="stylesheet" href="/css/css_resume.css">

@stop


@section('content')
<div class="menu text-center">
	<p>
		<div class="top_header">
			<h1>Connect with me.  You're only a click away.</h1>
		</div>
<div class="text-center">
		<a href="mailto:david.runnels@gmail.com?Subject=Web%20inquiry">
			<i class="fa fa-envelope-square fa-5x"></i>
		</a>

		<a href="http://linkedin.com/in/davidrunnels" target="_blank">
			<i class="fa fa-linkedin-square fa-5x"></i> 
		</a>

		<a href="https://github.com/davidrunnels" target="_blank">
			<i class="fa fa-github-square fa-5x"></i>
		</a>

		<a href="https://twitter.com/drun" target="_blank">
			<i class="fa fa-twitter-square fa-5x"></i>
		</a>

		<a href="http://instagram.com/drun" target="_blank">
			<i class="fa fa-instagram fa-5x"></i>
		</a>
	</div>
	</p>
</div>

@stop


@section('bottom-navbar') 

<nav class="navbar navbar-default navbar-fixed-bottom" role="navigation">

	@stop

	@section('bottom-scripts')
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="/bootstrap/js/bootstrap.min.js"></script>
	@stop


</body>
</html>

