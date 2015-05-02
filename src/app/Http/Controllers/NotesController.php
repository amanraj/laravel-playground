<?php namespace App\Http\Controllers;
use Session;
class NotesController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Welcome Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the "marketing page" for the application and
	| is configured to only allow guests. Like most of the other sample
	| controllers, you are free to modify or remove it as you desire.
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
	public function viewNotes($notes_id)
	{
		
		return view('notes/view_notes')->with('notes_id',$notes_id);
	}

	public function edit($notes_id)
	{
		
		return view('notes/edit_notes')->with('notes_id',$notes_id);
	}

	public function delete($notes_id)
	{
		
		return view('notes/delete_notes')->with('notes_id',$notes_id);
	}

	public function addCollegeNotes($college_id)
	{
		
		return view('notes/add_college_notes')->with('college_id',$college_id);
	}

	public function addCourseNotes($course_id)
	{
		
		return view('notes/add_course_notes')->with('course_id',$course_id);
	}
	

}
