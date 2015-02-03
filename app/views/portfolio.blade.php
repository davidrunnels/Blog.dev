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

@section('bottom-scripts')
      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
      <!-- Include all compiled plugins (below), or include individual files as needed -->
      <script src="/bootstrap/js/bootstrap.min.js"></script>
@stop