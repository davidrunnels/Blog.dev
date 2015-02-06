<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function() {
	return View::make('index');
});

Route::get('parks', function() {
	return View::make('parks');
});

Route::get('contact', function() {
	return View::make('contact');
});

Route::get('index', function() {
	return View::make('index');
});


Route::get('parks', function() {
	return 'Here are some national parks.';
});

Route::get('say-hello/{urlName}', function($argName){
	$data = array(
		'viewName' => $argName,
		'age'	   => 0	
	);
	return View::make('sayhello')->with($data);
	return View::make('sayhello', $data);
});

Route::get('say-hello/{name}/{age}', function($name, $age) {
	return "Hello $name! I hear you're $age years old.";
});

Route::get('resume', 'HomeController@showResume');

Route::get('portfolio', 'HomeController@showPortfolio');

Route::get('whackamole', 'HomeController@showWhackamole');

Route::get('contact', 'HomeController@showContact');

Route::get('create', 'HomeController@showCreate');

Route::get('rolldice/{number}', function($number){
	$roll = rand(1,12);
	return View::make('rolldice')->with('number', $number)->with('roll', $roll);
});

Route::resource('posts', 'PostsController');

Route::get('login', 'HomeController@showLogin');
Route::post('login', 'HomeController@doLogin');
Route::get('logout', 'HomeController@doLogout');

Route::get('search', function ()
{
	$search = Input::get('search');

	$query = Post::with('user');

	$query->where('title', 'like', '%' . $search . '%');
	$query->orWhere('created_at', 'like', '%' . $search . '%');

	$query->orWhereHas('user', function($q){
		$search = Input::get('search');

		$q->where('email', 'like', '%' . $search . '%');
	});

	$posts = $query->orderBy('created_at', 'desc')->paginate(4);

	foreach ($posts as $post) {
		echo $post->title;
	}
    
});


