<?php namespace App\Http\Controllers;
use Session;
use Illuminate\Http\Request;
class UserController extends Controller {

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
	public function login(Request $request)
	{
		$email = $request->input('email');
		$password = $request->input('password');
		echo $email, $password;
	}

	public function register(Request $request)
	{
		$email = $request->input('email');
		$f_name = $request->input('first_name');
		$l_name = $request->input('last_name');		
		$name = $f_name.' '.$l_name;
		$password = $request->input('password');
		$mobile = $request->input('mobile');
		
	}

	public function notification()
	{
		
		return view('user/notification');
	}

	public function profile()
	{
		
		return view('user/profile');
	}

	public function editProfile()
	{
		
		return view('user/profile');
	}

	public function settings()
	{
		
		return view('user/settings');
	}

	public function editSettings()
	{
		
		return view('user/settings');
	}
	
	public function signout()
	{
		return view('auth/sign_out');
	}
}
