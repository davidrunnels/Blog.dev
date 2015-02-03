<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>David Runnels @yield('title') </title>
	@yield('top-scripts')
</head>
<body>

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
          <li><a href="{{ action('HomeController@showResume') }}">Resume</a></li>
          <li><a href="{{ action('HomeController@showPortfolio') }}">Portfolio</a></li>
          <li><a href="http://codeup.dev/contact.html">Contact</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="http://codeup.com" target="blank">CodeUp</a></li>
        </li>
      </ul>
    </div>
  </div>

	<div class='container'>
		<div class='row'>
			<div class='col-md-8 col-med-offset-2'.

	<div id="content" class="col-md-3">
		@if (Session::has('successMessage'))
    		<div class="alert alert-success">{{{ Session::get('successMessage') }}}</div>
		@endif
		@if (Session::has('errorMessage'))
    		<div class="alert alert-danger">{{{ Session::get('errorMessage') }}}</div>
@endif

		@yield('content')
	</div>	

	@yield('bottom-navbar')

	@yield('bottom-scripts')

</body>
</html>