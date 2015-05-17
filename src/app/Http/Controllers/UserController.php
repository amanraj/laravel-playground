<?php namespace App\Http\Controllers;
use Session;
use Illuminate\Http\Request;
use DB;
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
		$name = $request->input('name');
		$password = $request->input('password');
		$mobile = $request->input('mobile');
		DB::insert('INSERT INTO users (user_name,user_email,user_password,mobile_number) VALUES(?,?,?,?)',[$name,$email,$password,$mobile]);
		return redirect('/');
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
