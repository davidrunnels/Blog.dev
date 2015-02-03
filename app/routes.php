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

Route::get('rolldice/{number}', function($number){
	$roll = rand(1,12);
	return View::make('rolldice')->with('number', $number)->with('roll', $roll);
});

Route::resource('posts', 'PostsController');

Route::get('orm-test', function ()
{
    
});


