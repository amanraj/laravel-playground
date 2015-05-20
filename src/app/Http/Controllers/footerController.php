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

	public function review(Request $request)
	{
		return view('footer/review');
		$name = $request->input('name');
		$college = $request->input('college');
		$branch = $request->input('branch');
		$year = $request->input('year');
		$merits = $request->input('merits');
		$demerits = $request->input('demerits');
		$comments = $request->input('comments');
		$campuslife = $request->input('campuslife');
		$hostel = $request->input('hostel');
		$location = $request->input('location');
		$facilities = $request->input('facilities');

		DB::insert('INSERT INTO review (name,college,branch,year,campuslife,hostel,location,facilities,merits,demerits,comments) VALUES(?,?,?,?,?,?,?,?,?,?,?)',[$name,$college,$branch,$year,$campuslife,$hostel,$location,$facilities,$merits,$demerits,$comments] );
	}

}
