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
		
		return view('/college/search_college')->with ( array (

			'result' => $results

			));
	}

	public function college($college_id)
	{	
		$results_1 = DB::select('select * from college_review where college_reference_id = ?',[$college_id]);
		$results_2 = DB::select('select * from college where college_id = ?',[$college_id]);
		$results = DB::select('select * from ambassadors where ambassadors_college_id = ?',[$college_id]);
		$general_question = DB::select('select * from college_forum_questions where question_type = ? and question_college_id = ?',['general',$college_id]);
		$admission_question = DB::select('select * from college_forum_questions where question_type = ? and question_college_id = ?',['admission',$college_id]);
		$campus_question = DB::select('select * from college_forum_questions where question_type = ? and question_college_id = ?',['campus',$college_id]);
		$placement_question = DB::select('select * from college_forum_questions where question_type = ? and question_college_id = ?',['placement',$college_id]);

		return view('/college/college')->with(array(
			'result' => $results,
			'result_1' => $results_1,
			'result_2' => $results_2,
			'general_question' => $general_question,
			'admission_question' => $admission_question,
			'campus_question' => $campus_question,
			'placement_question' => $placement_question
			)); 

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