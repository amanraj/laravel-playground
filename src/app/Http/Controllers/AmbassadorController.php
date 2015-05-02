<?php namespace App\Http\Controllers;
use Session;
class AmbassadorController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| College Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the views and php for the ambassador application and
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
	public function viewAmbassadors()
	{
		
		return view('/ambassadors/ambassadors');
	}

	public function ambassador($ambassador_id)
	{
		
		return view('/ambassadors/ambassador')->with('ambassador_id', $ambassador_id);
	}
	

}