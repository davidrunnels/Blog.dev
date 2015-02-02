@extends('layouts.master')

@section('title')
	- Resume
@stop

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Resume - David Runnels</title>

  <!-- Bootstrap -->
  <link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->

      <!-- Font Awesome -->

      <link rel="stylesheet" href="/font-awesome-4.2.0/css/font-awesome.min.css">

      <!-- Padding -->
     <!-- <style type="text/css">
      body { 
        padding-top: 70px; 
      }
    </style> -->

    <link rel="stylesheet" href="/css/css_resume.css">

  </head>
  <body>

    <!-- Navbar -->

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

  <!-- Collect the nav links, forms, and other content for toggling -->



  <!-- Navbar end -->

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


 <!-- Footer Navbar -->

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


      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
      <!-- Include all compiled plugins (below), or include individual files as needed -->
      <script src="/bootstrap/js/bootstrap.min.js"></script>



    </body>
    </html>

@stop
