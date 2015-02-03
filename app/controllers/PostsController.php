<?php

class PostsController extends \BaseController {

	public function index()
	{
		$posts = Post::paginate(4);
		return View::make('posts.index')->with('posts', $posts);
	}

	public function create()
	{
		return View::make('posts.create');
	}

	public function store()
	{

		try {

			$post = new Post();
			
		} catch (Exception $e) {

			Log::warning("User made a bad PostController request.", array('id' => id));
			App::abort(404);
		}
		
		return $this->savePost($post);

	}

	public function show($id)
	{
		$post = Post::find($id);
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
		return "Should delete a blog post from the database.";
	}

	protected function savePost($post)
	{
		$validator = Validator::make(Input::all(), Post::$rules);

		if($validator->fails()) {
			Session::flash('errorMessage', 'Failed to edit post.');
			return Redirect::back()->withInput()->withErrors($validator);
    	} else {
			$newPost = new Post();

			$newPost->title = Input::get('title');
			$newPost->body = Input::get('body');

			$newPost->save();

			return Redirect::action('PostsController@index');
		}

	}

}
