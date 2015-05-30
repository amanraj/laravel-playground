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
		$confirmation_code = str_random(30);
		$rows = DB::select('SELECT * FROM users WHERE user_email = ?',[$email]);
		if(count($rows) == 0){
			$password = Hash::make($password);
			DB::insert('INSERT INTO users (user_name,user_email,user_password,mobile_number,confirmation_code) VALUES(?,?,?,?,?)',[$name,$email,$password,$mobile,$confirmation_code]);
			Session::put('email',$hashed['0']->user_email);
			Mail::send('email.verify', $confirmation_code, function($message) {
            $message->to(Input::get('user_email'), Input::get('user_name'))
                ->subject('Verify your email address');
        	});

        	Flash::message('Thanks for signing up! Please check your email.');
			return redirect('/');
		}
		else{
			$error = '* User with this Email already exists';
			return view('welcome')->with(array('error' => $error));
		}
		
	}

	public function confirm($confirmation_code)
    {
        if( ! $confirmation_code)
        {
            throw new InvalidConfirmationCodeException;
        }

        $user = User::whereConfirmationCode($confirmation_code)->first();

        if ( ! $user)
        {
            throw new InvalidConfirmationCodeException;
        }

        $user->confirmed = 1;
        $user->confirmation_code = null;
        $user->save();

        Flash::message('You have successfully verified your account.');

        return Redirect::route('login_path');
    }

	public function github_redirect()
	{
		return \Socialize::with('facebook')->redirect();
	}

	public function github()
	{
		$user = \Socialize::with('facebook')->user();

		// OAuth Two Providers
		$token = $user->token;

		// OAuth One Providers
		$token = $user->token;
		$tokenSecret = $user->tokenSecret;

		// All Providers
		$user->getId();
		$user->getNickname();
		$name = $user->getName();
		$email = $user->getEmail();
		$user->getAvatar();
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

	public function editProfile(Request $request)
	{
		$name = $request->input('name');
		$email = $request->input('email');
		$mobile = $request->input('mobile');

		DB::update('UPDATE users SET user_name = ?, user_email = ?, mobile_number = ? WHERE user_email = ?',[$name,$email,$mobile,Session::get('email')]);
		return redirect()->back();
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
