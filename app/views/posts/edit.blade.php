@extends('layouts.master')

@section('title')
- Edit
@stop

@section('content')

<div class="page-header"><h1>Edit Post</h1></div>

{{ Form::model($post, array('action' => array('PostsController@update', $post->id),'method' => 'put', 'files' => true)) }}
	@include('posts.form')

	{{ Form::submit('Save Changes', array('class' => 'btn btn-primary')) }}
{{ Form::close() }}

@stop