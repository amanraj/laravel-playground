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

	public function team(){

		return view('/footer/team');
	}

	public function be_ambassador()
	{

		return view('/footer/be_a_ambassador');
	}

	public function submit_review(Request $request){
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

		return redirect('/');
	}
	public function review(Request $request)
	{	

		$results = DB::select('SELECT * FROM college');
		return view('footer/review')->with(array(
			'results' => $results
			));
		
	}
}
