<?php namespace App\Http\Controllers;
use Session;
class ForumController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| College Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the views and php for the Forum application and
	| fetches data from the database to display
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('guest');
	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function viewForum()
	{
		
		return view('/forum/forum');
	}

	public function viewThread($thread_id)
	{
		
		return view('/forum/thread')->with('thread_id', $thread_id);
	}

	public function reply()
	{
		
		return view('/forum/forum');
	}

	public function editPost()
	{
		
		return view('/forum/forum');
	}

	public function deletePost()
	{
		
		return view('/forum/forum');
	}

	public function upVote()
	{
		
		return view('/forum/forum');
	}

	public function downVote()
	{
		
		return view('/forum/forum');
	}
	

}