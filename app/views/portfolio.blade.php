@extends('layouts.master')

@section('title')
	- Portfolio
@stop

@section('content')
    <h1>Hello! Welcome to my portfolio.</h1>
	<a href="{{ action('HomeController@showResume') }}">My Resume</a>
@stop
