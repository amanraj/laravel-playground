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
		if(Session::has('email')){
			$results = DB::select('select * from course');
			return view('/course/search_course')->with (array (
				'result' => $results
				));
		}else{
			return redirect('/landing');
		}
	}

	public function course($course_id)
	{
		if(Session::has('email')){
			$results_1 = DB::select('select * from course where course_id = ?' , [$course_id] );
			$results_2 = DB::select('select * from course_review where course_reference_id = ?' , [$course_id] );
			return view('/course/course')->with (array(
					'result_1' => $results_1 , 
					'result_2' => $results_2
					));
		}else{
			return redirect('/landing');
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