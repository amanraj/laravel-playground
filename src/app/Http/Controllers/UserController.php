<?php namespace App\Http\Controllers;
use Session;
use Illuminate\Http\Request;
use Hash;
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
		$hashed = DB::select('SELECT user_password,user_email FROM users WHERE user_email = ?',[$email]);
		if(Hash::check($password,$hashed['0']->user_password)){
			Session::put('email',$hashed['0']->user_email);
			return redirect('/');
		}else{
			return view('welcome')->with(array('error' => '* Please Check Your Email/Password'));
		}
	}

	public function register(Request $request)
	{
		
		$email = $request->input('email');
		$name = $request->input('name');
		$password = $request->input('password');
		$mobile = $request->input('mobile');
		$rows = DB::select('SELECT * FROM users WHERE user_email = ?',[$email]);
		if(count($rows) == 0){
			$password = Hash::make($password);
			DB::insert('INSERT INTO users (user_name,user_email,user_password,mobile_number) VALUES(?,?,?,?)',[$name,$email,$password,$mobile]);
			Session::put('email',$hashed['0']->user_email);
			return redirect('/');
		}else{
			$error = '* User with this Email already exists';
			return view('welcome')->with(array('error' => $error));
		}
		
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
		Session::forget('email');
		return redirect('/landing');
	}
}
