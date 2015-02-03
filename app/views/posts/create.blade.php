@extends('layouts.master')

@section('title')
- Create
@stop

@section('top-scripts')
<!-- Bootstrap -->
<link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<!-- Font Awesome -->
<link rel="stylesheet" href="/font-awesome-4.2.0/css/font-awesome.min.css">

<link rel="stylesheet" href="/css/css_resume.css">

@stop

@section('content')

<form method="POST" action="{{{ action('PostsController@store') }}}">
	<div class="form-group">
		<label for="title">Title<br></label>
		<input class="form-control" id="title" name="title" value="{{{ Input::old('title') }}}" type="text">
		<p>{{ $errors->first('title', '<span class="help-block">:message</span>') }}</p>
	</div>
	<div class="form-group">
		<label for="body">Body<br></label>
		<input class="form-control" id="body" name="body" value="{{{ Input::old('body') }}}" type="text">
		<p>{{ $errors->first('body', '<span class="help-block">:message</span>') }}</p>
	</div>

	<p><button type="submit" class="btn btn-primary">Create Post</button>

		@stop

		@section('bottom-scripts')
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="/bootstrap/js/bootstrap.min.js"></script>
		@stop
