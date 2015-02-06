@extends('layouts.master')

@section('title')
- Create
@stop

@section('content')
	<div class="page-header"><h1>Create A Post</h1></div>

	{{Form::open(array('action' =>'PostsController@store', 'files' => true)) }}
		
	@include('posts.form')

	{{Form::submit('Save Changes', array('class' => 'btn btn-primary')) }}
	{{ Form::close() }}
@stop

