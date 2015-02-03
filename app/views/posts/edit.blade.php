@extends('layouts.master')

@section('title')
- Edit
@stop

@section('top-scripts')
<!-- Bootstrap -->
<link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<!-- Font Awesome -->
<link rel="stylesheet" href="/font-awesome-4.2.0/css/font-awesome.min.css">

<link rel="stylesheet" href="/css/css_resume.css">

@stop

@section('content')

<div class="page-header"><h1>Edit Post</h1></div>

{{ Form::model($post, array('action' => array('PostsController@update', $post->id),'method' => 'put')) }}
	@include('posts.form')

	{{ Form::submit('Save Changes', array('class' => 'btn btn-primary')) }}
{{ Form::close() }}

@section('bottom-scripts')
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="/bootstrap/js/bootstrap.min.js"></script>
		@stop

@stop