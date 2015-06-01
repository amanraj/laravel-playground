<?php namespace App\Http\Controllers;
use Session;
use Illuminate\Http\Request;
use DB;
use Redirect;
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
		$user = DB::select('SELECT * FROM users WHERE user_email = ?',[Session::get('email')]);		
		return view('/forum/forum')->with(array(
			'user' => $user['0']
			));
	}

	public function viewThread($thread_id)
	{
		$question = DB::select('SELECT * FROM college_forum_questions WHERE question_id = ?',[$thread_id]);
		$replies = DB::select('SELECT * FROM college_questions_reply INNER JOIN users WHERE user_reference_id = user_id and college_question_reference_id = ?',[$thread_id]);
		if(Session::has('email')){
			$user = DB::select('SELECT * FROM users WHERE user_email = ?',[Session::get('email')]);	
			return view('/forum/thread')->with(array(
				'user' => $user['0'],
				'question' => $question['0'],
				'replies' => $replies,
				));
		}else{
			return view('/forum/non_thread')->with('thread_id', $thread_id)->with(array(
				'replies' => $replies,
				'question' => $question['0'],
				));
		}
	}

	public function post(Request $request){

		$user_id = DB::select('SELECT user_id FROM users WHERE user_email = ?',[Session::get('email')]);
		$college = $request->input('college');
		$type = $request->input('type');
		$title = $request->input('question_title');
		$body = $request->input('question_body');

		DB::insert('INSERT INTO college_forum_questions (question_college_id,user_reference_id,question_type,question_title,question_description) VALUES (?,?,?,?,?)',[$college,$user_id['0']->user_id,$type,$title,$body]);

		return Redirect::back();
	}
	public function reply($thread_id,Request $request)
	{
		$reply = $request->input('reply');
		$user_id = DB::select('SELECT user_id FROM users WHERE user_email = ?',[Session::get('email')]);
		$user_id = $user_id['0']->user_id;
		DB::insert('INSERT INTO college_questions_reply (college_question_reference_id,user_reference_id,reply) VALUES(?,?,?)',[$thread_id,$user_id,$reply]);
		return redirect()->back();
	}

	public function editPost()
	{
		
		return view('/forum/forum');
	}

	public function deletePost()
	{
		
		return view('/forum/forum');
	}

	public function upVote($post_id)
	{
		$up = DB::select('SELECT up_vote FROM college_questions_reply WHERE college_question_reply_id = ?',[$post_id]);
		$upvote = $up['0']->up_vote + 1;
		DB::update('UPDATE college_questions_reply SET up_vote = ? WHERE college_question_reply_id = ?',[$upvote,$post_id]);
		return redirect()->back();
	}

	public function downVote()
	{
		
		return view('/forum/forum');
	}
	

}