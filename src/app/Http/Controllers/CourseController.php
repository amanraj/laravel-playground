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
		return view('/course/search_course')->with (array (
			'result' => $results
			));
		
	}

	public function course($course_id)
	{
		$results = DB::select('select * from course inner join course_review on course.course_id=course_review.course_reference_id where course.course_id=?' , [$course_id]);        
		return view('/course/course')->with (array(
				'result' => $results
				));


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