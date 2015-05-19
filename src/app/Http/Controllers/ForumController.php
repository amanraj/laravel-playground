<?php namespace App\Http\Controllers;
use Session;
use Illuminate\Http\Request;
use DB;
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

	public function post(Request $request){

		$user_id = DB::select('SELECT user_id FROM users WHERE user_email = ?',[Session::get('email')]);
		$college = $request->input('college');
		$type = $request->input('type');
		$title = $request->input('question_title');
		$body = $request->input('question_body');

		DB::insert('INSERT INTO college_forum_questions (question_college_id,user_reference_id,question_type,question_title,question_description) VALUES (?,?,?,?,?)',[$college,$user_id['0']->user_id,$type,$title,$body]);
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