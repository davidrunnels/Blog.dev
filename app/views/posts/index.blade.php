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

		<div>
			<h1>{{{ $post->title }}}</h1>
			<p>{{{ $post->body }}}</p>
			<p>Post Created: {{{ $post->created_at->diffForHumans() }}}<br>
			Post Updated: {{{ $post->updated_at->diffForHumans() }}}</p>

			<a href="{{{ action('PostsController@show', $post->id) }}}">Display this Post&nbsp</a>
			<a href="{{{ action('PostsController@edit', $post->id) }}}">&nbspEdit this Post&nbsp</a>
			<a href="">Delete this Post&nbsp(disabled)</a>
		</div>
	@endforeach

	<p>{{ $posts->links() }} </p>
	
@stop


@stop

		@section('bottom-scripts')
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="/bootstrap/js/bootstrap.min.js"></script>
		@stop