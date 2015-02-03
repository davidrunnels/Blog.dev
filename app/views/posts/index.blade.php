@extends('layouts.master')

@section('title')
	- Post Index
@stop

@section('top-scripts')
<!-- Bootstrap -->
<link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<!-- Font Awesome -->
<link rel="stylesheet" href="/font-awesome-4.2.0/css/font-awesome.min.css">

<link rel="stylesheet" href="/css/css_resume.css">

@stop

@section('content')

	@foreach ($posts as $post)
		<h1>{{{ $post->title }}}</h1>
		<p>{{{ $post->body }}}</p>
	@endforeach

	{{ $posts->links() }} 

@stop

@stop

		@section('bottom-scripts')
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="/bootstrap/js/bootstrap.min.js"></script>
		@stop