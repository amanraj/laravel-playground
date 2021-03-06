<?php namespace App\Http\Controllers;
use Session;
use DB;
class CourseController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| College Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the views and php for the course application and
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
	public function viewCourses()
	{
		
		$results = DB::select('select * from course');
		if(Session::has('email')){
			$user = DB::select('SELECT * FROM users WHERE user_email = ?',[Session::get('email')]);	
			return view('/course/search_course')->with (array (
				'result' => $results,
				'user' => $user['0']
				));
		}else{
			return view('/course/non_search_course')->with (array (
				'result' => $results
				));
		}
	}

	public function course($course_id)
	{
		
		$results_1 = DB::select('select * from course where course_id = ?' , [$course_id] );
		if(Session::has('email')){
			$user = DB::select('SELECT * FROM users WHERE user_email = ?',[Session::get('email')]);	
			return view('/course/course')->with (array(
					'result_1' => $results_1,
					'user' => $user['0']
					));
		}else{
			return view('/course/non_course')->with (array(
					'result_1' => $results_1
					));
		}


	}

	public function general($course_id)
	{
		
		return view('/course/general')->with('course_id',$course_id);
	}

	public function reviews($course_id)
	{
		
		return view('/course/reviews')->with('course_id',$course_id);
	}
}