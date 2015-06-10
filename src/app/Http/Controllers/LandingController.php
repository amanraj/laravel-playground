<?php namespace App\Http\Controllers;
use Session;
use DB;
class LandingController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Welcome Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the "marketing page" for the application and
	| is configured to only allow guests. Like most of the other sample
	| controllers, you are free to modify or remove it as you desire.
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
	public function index()
	{
		if (Session::has('email'))
		{	
			$user = DB::select('SELECT * FROM users WHERE user_email = ?',[Session::get('email')]);					
		    return redirect('/')->with(array(
		    	'user' => $user
		    	));
		}
		return view('welcome')->with(array('error' => ''));
	}
	

}
