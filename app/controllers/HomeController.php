<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showWelcome()
	{
		return View::make('hello');
	}

	public function showResume()
	{
		return View::make('resume');
	}

	public function showPortfolio()
	{
		return View::make('portfolio');
	}

	public function showWhackamole()
	{
		return View::make('whackamole');
	}

	public function showContact()
	{
		return View::make('contact');
	}

	public function showLogin()
	{
		return View::make('login');
	}

	public function showLogout()
	{
		return View::make('logout');
	}

	public function doLogin()
	{
		$email = Input::get('email');
		$password = Input::get('password');

		if (Auth::attempt(array('email' => $email, 'password' => $password))) {
		    Session::flash('successMessage', "You're logged in!.");

		    return Redirect::intended('/');
		} else {
			Session::flash('errorMessage', 'Failed to log in.');

		    return Redirect::action('HomeController@showLogin');
		}
	}

	public function doLogout()
	{
		Auth::logout();
		Session::flash('successMessage', "You're logged out.");
		return Redirect::action('HomeController@showLogout');
	}

}
