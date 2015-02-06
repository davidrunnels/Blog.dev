@extends('layouts.master')

@section('title')
	- Post Show
@stop

@section('top-scripts')
<!-- Bootstrap -->
<link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<!-- Font Awesome -->
<link rel="stylesheet" href="/font-awesome-4.2.0/css/font-awesome.min.css">

<link rel="stylesheet" href="/css/css_resume.css">

@stop

@section('content')
<div>
	<div class='main-container'>
		<div class='posts' id='posts'>
			<h2>{{{ $post->title }}}</h2>
			<div class='create-update'>
				post updated [{{{ $post->updated_at->diffForHumans() }}}]&nbsp
				created [{{{ $post->created_at->diffForHumans() }}}]</p>
			</div>
				<h5>posted by: {{{ $post->user->email }}}</h5>
			<p><h3>{{{ $post->body }}}</h3></p>
			@if (Auth::check())
		
			<a href="{{{ action('PostsController@edit', $post->id) }}}"><button class='btn btn-info' id='edit-button'>Edit Post</button></a>

			{{ Form::open(array('action' => array('PostsController@destroy', $post->id), 'method' => 'delete')) }}
				{{ Form::submit('Delete Post', array('class' => 'btn btn-danger', 'id' => 'delete-button')) }}
			{{ Form::close() }}

			</div>
</div>
	@endif

	@if (Auth::guest())
		<h2>Welcome Guest!</h2>
	@endif
</div>
	
@stop

