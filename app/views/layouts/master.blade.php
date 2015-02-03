<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>David Runnels @yield('title') </title>
	@yield('top-scripts')
</head>
<body>
	@yield('top-navbar')

	<div id="content" class="col-md-3">
		@yield('content')
	</div>	

	@yield('bottom-navbar')

	@yield('bottom-scripts')

</body>
</html>