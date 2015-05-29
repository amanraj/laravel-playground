<?php namespace App\Http\Controllers;
use Session;
use DB;
class DashboardController extends Controller {

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
	public function viewDashboard()
	{
		if(Session::has('email')){
			
			$user = DB::select('SELECT * FROM users WHERE user_email = ?',[Session::get('email')]);
			$choices = DB::select('SELECT * FROM course_choices LEFT JOIN college ON course_choices.college_reference_id = college.college_id LEFT JOIN course ON course_choices.course_reference_id = course.course_id WHERE user_reference_id=?',[$user['0']->user_id]);
			return view('/dashboard/home')->with(array(
				'user' => $user['0'],
				'choice' => $choices
				));
		}
		else{
			return redirect('/landing');
		}
	}
	

}