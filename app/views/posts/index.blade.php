@extends('layouts.master')

@section('title')
- Post Index
@stop

@section('content')

@forelse ($posts as $post)

<div class='main-container'>
	<div class='posts' id='posts'>
		<h2>
			<strong>
				{{{ $post->title }}}</strong>
			</h2>

			<div class='create-update'>
				<p>
					post updated [{{{ $post->updated_at->diffForHumans() }}}]&nbsp
					created [{{{ $post->created_at->diffForHumans() }}}]
				</p>
			</div>

			<h5>Posted By: {{{ $post->user->email }}}</h5>

			<p><h3>{{{ $post->body }}}</h3></p>

			<a href="{{{ action('PostsController@show', $post->id) }}}"><button class='btn btn-primary' id='display-button'>Display Post</button></a>
			<a href="{{{ action('PostsController@edit', $post->id) }}}"><button class='btn btn-info' id='edit-button'>Edit Post</button><br></a>
	</div>
</div>

@empty
{{{ "Search not found on the site." }}}
@endforelse

<div class='text-center'>
	{{ $posts->appends(array('search' => Input::get('search')))->links()}}
</div>


@stop
