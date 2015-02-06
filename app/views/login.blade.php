@extends('layouts.master')

@section('title')
	- Log In
@stop

@section('top-scripts')
  <!-- Bootstrap -->
  <link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="/font-awesome-4.2.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="/css/css_resume.css">

@stop

@section('content')

<h1 class="page-header">Please Log In</h1>
{{ Form::open(array('action' => 'HomeController@doLogin')) }}

<div class="form-group">
	{{ Form::label('email', 'eMail Address') }}
	{{ Form::email('email', Input::old('email'), array('class' => 'form-control')) }}
</div>

<div class="form-group">
	{{ Form::label('password', 'Password') }}
	{{ Form::password('password', array('class' => 'form-control')) }}
</div>

<div class="form-group">
	{{ Form::submit('Log In', array('class' => 'btn btn-primary')) }}
</div>

{{ Form::close() }}

@stop