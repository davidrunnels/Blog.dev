@extends('layouts.master')

@section('title')
	- Portfolio
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
    <h1>Hello! Welcome to my portfolio.</h1>
	<a href="{{ action('HomeController@showResume') }}">My Resume</a>
	<div class="container">
  <div class="row clearfix">
    <div class="col-md-3 column">
      <h3>
        h3. Lorem ipsum dolor sit amet.
      </h3><img alt="140x140" src="http://lorempixel.com/140/140/" class="img-rounded" />
      <p>
        Lorem ipsum dolor sit amet, <strong>consectetur adipiscing elit</strong>. Aliquam eget sapien sapien. Curabitur in metus urna. In hac habitasse platea dictumst. Phasellus eu sem sapien, sed vestibulum velit. Nam purus nibh, lacinia non faucibus et, pharetra in dolor. Sed iaculis posuere diam ut cursus. Morbi commodo sodales nisi id sodales. Proin consectetur, nisi id commodo imperdiet, metus nunc consequat lectus, id bibendum diam velit et dui. Proin massa magna, vulputate nec bibendum nec, posuere nec lacus. <small>Aliquam mi erat, aliquam vel luctus eu, pharetra quis elit. Nulla euismod ultrices massa, et feugiat ipsum consequat eu.</small>
      </p>
    </div>
    <div class="col-md-3 column">
      <h3>
        h3. Lorem ipsum dolor sit amet.
      </h3><img alt="140x140" src="http://lorempixel.com/140/140/" class="img-rounded" />
      <p>
        Lorem ipsum dolor sit amet, <strong>consectetur adipiscing elit</strong>. Aliquam eget sapien sapien. Curabitur in metus urna. In hac habitasse platea dictumst. Phasellus eu sem sapien, sed vestibulum velit. Nam purus nibh, lacinia non faucibus et, pharetra in dolor. Sed iaculis posuere diam ut cursus. <em>Morbi commodo sodales nisi id sodales. Proin consectetur, nisi id commodo imperdiet, metus nunc consequat lectus, id bibendum diam velit et dui.</em> Proin massa magna, vulputate nec bibendum nec, posuere nec lacus. <small>Aliquam mi erat, aliquam vel luctus eu, pharetra quis elit. Nulla euismod ultrices massa, et feugiat ipsum consequat eu.</small>
      </p>
    </div>
    <div class="col-md-3 column">
      <h3>
        h3. Lorem ipsum dolor sit amet.
      </h3><img alt="140x140" src="http://lorempixel.com/140/140/" class="img-rounded" />
      <p>
        Lorem ipsum dolor sit amet, <strong>consectetur adipiscing elit</strong>. Aliquam eget sapien sapien. Curabitur in metus urna. In hac habitasse platea dictumst. Phasellus eu sem sapien, sed vestibulum velit. Nam purus nibh, lacinia non faucibus et, pharetra in dolor. Sed iaculis posuere diam ut cursus. <em>Morbi commodo sodales nisi id sodales. Proin consectetur, nisi id commodo imperdiet, metus nunc consequat lectus, id bibendum diam velit et dui.</em> Proin massa magna, vulputate nec bibendum nec, posuere nec lacus. <small>Aliquam mi erat, aliquam vel luctus eu, pharetra quis elit. Nulla euismod ultrices massa, et feugiat ipsum consequat eu.</small>
      </p>
    </div>
    <div class="col-md-3 column">
      <h3>
        h3. Lorem ipsum dolor sit amet.
      </h3><img alt="140x140" src="http://lorempixel.com/140/140/" class="img-rounded" />
      <p>
        Lorem ipsum dolor sit amet, <strong>consectetur adipiscing elit</strong>. Aliquam eget sapien sapien. Curabitur in metus urna. In hac habitasse platea dictumst. Phasellus eu sem sapien, sed vestibulum velit. Nam purus nibh, lacinia non faucibus et, pharetra in dolor. Sed iaculis posuere diam ut cursus. <em>Morbi commodo sodales nisi id sodales. Proin consectetur, nisi id commodo imperdiet, metus nunc consequat lectus, id bibendum diam velit et dui.</em> Proin massa magna, vulputate nec bibendum nec, posuere nec lacus. <small>Aliquam mi erat, aliquam vel luctus eu, pharetra quis elit. Nulla euismod ultrices massa, et feugiat ipsum consequat eu.</small>
      </p>
    </div>
  </div>
</div>
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
      <a class="navbar-brand"</a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">    <!-- Footer Navbar -->
          <ul class="nav navbar-nav navbar-right">   
            <li><a href="mailto:david.runnels@gmail.com?Subject=Web%20inquiry">   
              <i class="fa fa-envelope-square fa-3x"></i></a></li>   
              <li><a href="http://linkedin.com/in/davidrunnels" target="_blank">   
               <i class="fa fa-linkedin-square fa-3x"></i>    
               <li><a href="https://github.com/davidrunnels" target="_blank">   
                 <i class="fa fa-github-square fa-3x"></i></a></li>   
                 <li><a href="https://twitter.com/drun" target="_blank">    
                   <i class="fa fa-twitter-square fa-3x">  </i></a></li>    
                   <li><a href="http://instagram.com/drun" target="_blank">   
                    <i class="fa fa-instagram fa-3x"></i></a></li>   
                  </ul>    
                </div>


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
      <a class="navbar-brand"</a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">    <!-- Footer Navbar -->
          <ul class="nav navbar-nav navbar-right">   
            <li><a href="mailto:david.runnels@gmail.com?Subject=Web%20inquiry">   
              <i class="fa fa-envelope-square fa-3x"></i></a></li>   
              <li><a href="http://linkedin.com/in/davidrunnels" target="_blank">   
               <i class="fa fa-linkedin-square fa-3x"></i>    
               <li><a href="https://github.com/davidrunnels" target="_blank">   
                 <i class="fa fa-github-square fa-3x"></i></a></li>   
                 <li><a href="https://twitter.com/drun" target="_blank">    
                   <i class="fa fa-twitter-square fa-3x">  </i></a></li>    
                   <li><a href="http://instagram.com/drun" target="_blank">   
                    <i class="fa fa-instagram fa-3x"></i></a></li>   
                  </ul>    
                </div>


@stop

@section('bottom-scripts')
      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
      <!-- Include all compiled plugins (below), or include individual files as needed -->
      <script src="/bootstrap/js/bootstrap.min.js"></script>
@stop