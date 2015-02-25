@extends('layouts.master')

@section('title')
	- Portfolio
@stop

@section('content')
    
	<div class="container">
  <div class="row clearfix">
    <div class="col-md-4 column">
      <h3 class="port-title">
        Serve Search Web Application
      </h3>
      <a href="http://servesearch.us">
        <img alt="140x140" src="/img/servesearch.png" class="img-rounded" />
      </a>
      <p>
         An application for connecting volunteers to organizations, creating and managing events and volunteers for organizations. Built using Laravel, PHP, MySQL, JavaScript, jQuery and Twitter Bootstrap. Development done in a Vagrant environment. Version control using Git and GitHub. Features a volunteer interface and administrative interface with customized views and data.
      </p>
    </div>
    <div class="col-md-4 column">
      <h3 class="port-title">
        Laravel Blog Project
      </h3>
      <a href="http://365daves.com">
        <img alt="140x140" src="/img/drwebdev_sm.jpg" class="img-rounded" />
      </a>
      <p>
         An application for writing and viewing blog posts as well as my personal portfolio and resume. Built using Laravel, PHP, MySQL, JavaScript, jQuery and Twitter Bootstrap. Development done in a Vagrant environment. Version control using Git and GitHub. Features user logins, blog post creation and viewing, image upload, search functionality, and ability for authors to edit posts.
      </p>
    </div>
    <div class="col-md-4 column">
      <h3 class="port-title">
        Whackamole Project
      </h3>
      <a href="{{ action('HomeController@showWhackamole') }}">
        <img alt="140x140" src="/img/cat10.jpg" class="img-rounded" />
      </a>
      <p>
         An application for pure enjoyment and the preservation of moles.  Built using PHP, JavaScript, jQuery and HTML/ CSS. 
      </p>
    </div>
    </div>
  </div>
</div>
@stop
