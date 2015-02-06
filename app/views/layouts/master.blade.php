<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">

	<title>David Runnels @yield('title') </title>
    
    <!-- Bootstrap -->
    <link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="/font-awesome-4.2.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="/css/css_resume.css">

</head>

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
                <li>
                    <a href="{{ action('HomeController@showResume') }}">Resume</a>
                </li>

                <li>
                    <a href="{{ action('HomeController@showPortfolio') }}">Portfolio</a>
                </li>

                <li>
                    <a href="{{ action('HomeController@showContact') }}">Contact</a>
                </li>

                <li>
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Blog <span class="caret"></span></a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="{{{ action('PostsController@index') }}}">Display Posts</a></li>
                                        <li><a href="/posts/create">Create Post</a></li>
                                        <li class="divider"></li>
                                        <li><a href="/login">Log In</a></li>
                                        <li class="divider"></li>
                                        <li><a href="/logout">Log Out</a></li>
                                    </ul>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>

            {{ Form::open(array('action' =>'PostsController@index', 'class' => 'navbar-form navbar-right', 'method' => 'GET')) }}
                <div class="form-group">
                    <input type="text" name="search" class="form-control" placeholder="Search Posts">
                </div>

                <button type="submit" class="btn btn-default">Submit</button>

            {{ Form::close()}}

        </div>
    </div>

<div class='container'>
    <div class='row'>
        <div class='col-md-12 col-med-offset-2'>

            <div id="content" class="col-md-3">
                @if (Session::has('successMessage'))

                <div class="alert alert-success">{{{ Session::get('successMessage') }}}</div>
                @endif

                @if (Session::has('errorMessage'))
                <div class="alert alert-danger">{{{ Session::get('errorMessage') }}}</div>
                @endif
            </div>	

        </div>

        @yield('content')


<div class='bottom-bar'>
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="/bootstrap/js/bootstrap.min.js"></script>

@yield('bottom-scripts')
</body>
</html>