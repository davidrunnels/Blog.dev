@extends('layouts.master')

@section('title')
	- Create
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