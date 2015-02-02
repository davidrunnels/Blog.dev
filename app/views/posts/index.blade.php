@extends('layouts.master')

@section('title')
	- Post Index
@stop

@section('content')

	@foreach ($posts as $post)
		<h1>{{{ $post->title }}}</h1>
		<p>{{{ $post->body }}}</p>
	@endforeach

@stop