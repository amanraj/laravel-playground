<?php namespace App\Http\Controllers;
use Session;
use Illuminate\Http\Request;
use DB;
class footerController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| College Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the views and php for the footer application and
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

	public function team()
	{
		$user = DB::select('SELECT * FROM users WHERE user_email = ?',[Session::get('email')]);

		if (Session::has('email')){
			return view('/footer/team')->with(array(
				'user' => $user
				));
		}
		else{
			return view('/footer/non_team')->with(array(
				'user' => $user
				));
		}
	}

	public function privacy_policy()
	{
		$user = DB::select('SELECT * FROM users WHERE user_email = ?',[Session::get('email')]);

		if (Session::has('email')){
			return view('/footer/privacy_policy')->with(array(
				'user' => $user
				));
		}else{
			return view('/footer/non_privacy_policy')->with(array(
				'user' => $user
				));
		}
	}

	public function term_condition()
	{
		$user = DB::select('SELECT * FROM users WHERE user_email = ?',[Session::get('email')]);

		if (Session::has('email')){
			return view('/footer/terms_conditions')->with(array(
				'user' => $user
				));
		}else{
			return view('/footer/non_terms_conditions')->with(array(
				'user' => $user
				));
		}
	}	

	public function be_ambassador()
	{
		$user = DB::select('SELECT * FROM users WHERE user_email = ?',[Session::get('email')]);
		if (Session::has('email')){
			return view('/footer/be_a_ambassador')->with(array(
				'user' => $user
				));
		}else{
			return view('/footer/non_be_a_ambassador')->with(array(
				'user' => $user
				));
		}
	}

	public function submit_review(Request $request)
	{
		$user = DB::select('SELECT * FROM users WHERE user_email = ?',[Session::get('email')]);
		$name = $request->input('name');
		$college = $request->input('college');
		$branch = $request->input('branch');
		$year = $request->input('year');
		$merits = $request->input('merits');
		$demerits = $request->input('demerits');
		$comments = $request->input('comments');
		$overall = $request->input('overall');
		$campuslife = $request->input('campuslife');
		$hostel = $request->input('hostel');
		$location = $request->input('location');
		$facilities = $request->input('facilities');
        
        $description = $year.' Student, from the Department of "'.$branch.'"';
        
		DB::insert('INSERT INTO college_review (college_reference_id,reviewer_name,reviewer_description,college_pros,college_cons,comments,college_overall_rating,college_campuslife_rating,college_hostel_rating,college_location_rating,college_facilities_rating) VALUES(?,?,?,?,?,?,?,?,?,?,?)',[$college,$name,$description,$merits,$demerits,$comments,$overall,$campuslife,$hostel,$location,$facilities] );

		return redirect('/')->with(array(
				'user' => $user
				));
	}
	public function review(Request $request)
	{	
		$user = DB::select('SELECT * FROM users WHERE user_email = ?',[Session::get('email')]);
		$results = DB::select('SELECT * FROM college');
		if(Session::has('email')){
			return view('footer/review')->with(array(
				'results' => $results,
				'user' => $user
				));
		}else{
			return view('footer/non_review')->with(array(
				'results' => $results,
				'user' => $user
				));
		}
		
	}
}
