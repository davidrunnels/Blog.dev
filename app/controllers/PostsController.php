<?php

class PostsController extends \BaseController {

	public function __construct() {

		$this->beforeFilter('auth', array('except' => array('index', 'show')));
	}

	public function index()
	{
		if (Input::has('search')) {
			$search = Input::get('search');
			$query = Post::with('user');

			$query->where('title', 'like', '%' . $search . '%');
			$query->orWhere('body', 'like', '%' . $search . '%');
			$query->orderBy('title', 'asc');
			$posts = $query->paginate(4);

			return View::make('posts.index')->with('posts', $posts);
		} else {
			$posts = Post::with('user')->orderBy('created_at', 'desc')->paginate(4);
			return View::make('posts.index')->with('posts', $posts);
		}
	}

	

	public function create()
	{
		return View::make('posts.create');
	}

	public function store()
	{

		$post = new Post();
		
		$post->user_id = Auth::id();
		
		return $this->savePost($post);

	}

	public function show($id)
	{
		$post = Post::findOrFail($id);
		return View::make('posts.show')->with('post', $post);
	}

	public function edit($id)
	{
		$post = Post::findOrFail($id);
		return View::make('posts.edit')->with('post', $post);
	}

	public function update($id)
	{
		$post = Post::findOrFail($id);
		return $this->savePost($post);
	}


	public function destroy($id)
	{
		try {
			$post = Post::findOrFail($id);
		}	catch (ModelNotFoundException $e) {
			Log::warning("User made a bad PostsController request", array('id' => $id));
			App::abort(404);
		}

		$post->delete();

		Session::flash('successMessage', 'Post deleted!');

		return Redirect::action('PostsController@index');
	}

	protected function savePost($post)
	{
		$validator = Validator::make(Input::all(), Post::$rules);

		if($validator->fails()) {
			Session::flash('errorMessage', 'Failed to edit post.');
			return Redirect::back()->withInput()->withErrors($validator);
    	} else {

			$post->user_id = Auth::id();
			$post->title = Input::get('title');
			$post->body = Input::get('body');

			$post->save();

			if (Input::hasFile('image')) {
				$post->uploadFile(Input::file('image'));

				$post->save();			
			}

			Session::flash('successMessage', 'Post successfully saved!');

			return Redirect::action('PostsController@index');
		}

	}

}
