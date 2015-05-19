<?php namespace App\Http\Controllers;
use Session;
use DB;
class CollegeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| College Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the views and php for the college application and
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
	public function viewColleges()
	{
		
		$results = DB::select( 'select * from college' );	
		if(Session::has('email')){		
			return view('/college/search_college')->with ( array (
				'result' => $results
				));
		}else{
			return view('/college/non_search_college')->with ( array (
				'result' => $results
				));
		}
		
	}

	public function college($college_id)
	{	
		
			$college_reviews = DB::select('SELECT * FROM college_review WHERE college_reference_id = ?',[$college_id]);
			$college_rating = DB::select('SELECT * FROM college_rating WHERE college_reference_id = ?',[$college_id]);
			$college_details = DB::select('SELECT * FROM college WHERE college_id = ?',[$college_id]);
			$courses = DB::select('SELECT course_name,course_id FROM course INNER JOIN course_college WHERE course.course_id = course_college.course_reference_id AND course_college.college_reference_id = ?',[$college_id]);
			$course_reviews = DB::select('SELECT * FROM course_college_review WHERE college_reference_id = ?',[$college_id]);
			$course_rating = DB::select('SELECT * FROM course_college_rating WHERE college_reference_id = ?',[$college_id]);
			$ambassadors = DB::select('SELECT * FROM ambassadors WHERE ambassadors_college_id = ?',[$college_id]);
			$general_question = DB::select('SELECT * FROM college_forum_questions WHERE question_type = ? AND question_college_id = ?',['general',$college_id]);
			$admission_question = DB::select('SELECT * FROM college_forum_questions WHERE question_type = ? AND question_college_id = ?',['admission',$college_id]);
			$campus_question = DB::select('SELECT * FROM college_forum_questions WHERE question_type = ? AND question_college_id = ?',['campus',$college_id]);
			$placement_question = DB::select('SELECT * FROM college_forum_questions WHERE question_type = ? AND question_college_id = ?',['placement',$college_id]);
		if(Session::has('email')){
			return view('/college/college')->with(array(
				'ambassadors' => $ambassadors,
				'college_reviews' => $college_reviews,
				'college_rating' => $college_rating,
				'college_details' => $college_details,
				'courses' => $courses,
				'course_reviews' => $course_reviews,
				'course_rating' => $course_rating,
				'general_question' => $general_question,
				'admission_question' => $admission_question,
				'campus_question' => $campus_question,
				'placement_question' => $placement_question
				));
		}else{
			return view('/college/non_college')->with(array(
				'ambassadors' => $ambassadors,
				'college_reviews' => $college_reviews,
				'college_rating' => $college_rating,
				'college_details' => $college_details,
				'courses' => $courses,
				'course_reviews' => $course_reviews,
				'general_question' => $general_question,
				'admission_question' => $admission_question,
				'campus_question' => $campus_question,
				'placement_question' => $placement_question
				));
		} 

	}

	public function overview($college_id)
	{
		
		return view('/college/overview')->with('college_id',$college_id);
	}

	public function collegeReviews($college_id)
	{
		
		return view('/college/college_reviews')->with('college_id',$college_id);
	}

	public function courseReviews($college_id)
	{
		
		return view('/college/course_reviews')->with('college_id',$college_id);
	}
	

}