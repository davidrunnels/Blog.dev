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

Route::get('parks', function() {
	return View::make('parks');
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

Route::get('resume', function() {
	return Redirect::to('http://codeup.dev');
});

Route::get('portfolio', function() {
	return Redirect::to('http://planner.dev');
});

Route::get('rolldice/{number}', function($number){
	$roll = rand(1,12);
	return View::make('rolldice')->with('number', $number)->with('roll', $roll);
});

