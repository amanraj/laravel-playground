<?php namespace App\Http\Controllers;
use Session;
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
		
		return view('/college/search_college');
	}

	public function college($college_id)
	{
		
		return view('/college/college')->with('college_id',$college_id);
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