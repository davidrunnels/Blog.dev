@extends('layouts.master')

@section('title')
	- Resume
@stop

@section('top-scripts')
  <!-- Bootstrap -->
  <link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="/font-awesome-4.2.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="/css/css_resume.css">

@stop

@section('top-navbar')

    <div class="navbar navbar-default">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">David Runnels</a>
      </div>
      <div class="navbar-collapse collapse navbar-responsive-collapse">
        <ul class="nav navbar-nav">
          <li><a href="http://codeup.dev/who_am_i.html">Who Am I?</a></li>
          <li><a href="{{ action('HomeController@showPortfolio') }}">Portfolio</a></li>
          <li><a href="http://codeup.dev/contact.html">Contact</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="http://codeup.com" target="blank">CodeUp</a></li>
        </li>
      </ul>
    </div>
  </div>

@stop

@section('content')

  <body>

  <!-- begin container -->
<div class="container">
  <div class="row clearfix">
    <div class="col-md-4 column">
      <h3>
        h3. Lorem ipsum dolor sit amet.
      </h3>
      <ul>
        <li>
          Lorem ipsum dolor sit amet
        </li>
        <li>
          Consectetur adipiscing elit
        </li>
        <li>
          Integer molestie lorem at massa
        </li>
        <li>
          Facilisis in pretium nisl aliquet
        </li>
        <li>
          Nulla volutpat aliquam velit
        </li>
        <li>
          Faucibus porta lacus fringilla vel
        </li>
        <li>
          Aenean sit amet erat nunc
        </li>
        <li>
          Eget porttitor lorem
        </li>
      </ul>
    </div>
    <div class="col-md-4 column">
      <h3>
        h3. Lorem ipsum dolor sit amet.
      </h3>
      <ul>
        <li>
          Lorem ipsum dolor sit amet
        </li>
        <li>
          Consectetur adipiscing elit
        </li>
        <li>
          Integer molestie lorem at massa
        </li>
        <li>
          Facilisis in pretium nisl aliquet
        </li>
        <li>
          Nulla volutpat aliquam velit
        </li>
        <li>
          Faucibus porta lacus fringilla vel
        </li>
        <li>
          Aenean sit amet erat nunc
        </li>
        <li>
          Eget porttitor lorem
        </li>
      </ul>
    </div>
    <div class="col-md-4 column">
      <h3>
        h3. Lorem ipsum dolor sit amet.
      </h3>
      <ul>
        <li>
          Lorem ipsum dolor sit amet
        </li>
        <li>
          Consectetur adipiscing elit
        </li>
        <li>
          Integer molestie lorem at massa
        </li>
        <li>
          Facilisis in pretium nisl aliquet
        </li>
        <li>
          Nulla volutpat aliquam velit
        </li>
        <li>
          Faucibus porta lacus fringilla vel
        </li>
        <li>
          Aenean sit amet erat nunc
        </li>
        <li>
          Eget porttitor lorem
        </li>
      </ul>
    </div>
  </div>
</div> <!-- end of container -->
@stop


@section('bottom-navbar')
 <nav class="navbar navbar-default navbar-fixed-bottom" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand"</a>
      </div>

@stop

@section('bottom-scripts')
      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
      <!-- Include all compiled plugins (below), or include individual files as needed -->
      <script src="/bootstrap/js/bootstrap.min.js"></script>
@stop


    </body>
    </html>

