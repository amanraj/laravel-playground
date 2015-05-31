<?php namespace App\Http\Controllers;
use Session;
use DB;
use Illuminate\Http\Request;
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
		
			$results = DB::select('select * from ambassadors');
		if(Session::has('email')){
			$user = DB::select('SELECT * FROM users WHERE user_email = ?',[Session::get('email')]);		
			return view('/ambassadors/ambassadors')->with(array(
				'result' => $results,
				'user' => $user['0']
				));
		}else{
			return view('/ambassadors/non_ambassadors')->with(array(
				'result' => $results
				));
		}
	}

	public function ambassador($ambassador_id)
	{
		
		$results = DB::select('select * from ambassadors where ambassadors_id = ?', [$ambassador_id]);
		$ambs_college = DB::select('SELECT college_name FROM college WHERE college_id = ?',[$results['0']->ambassadors_college_id]);
		$general_question = DB::select('select * from college_forum_questions where question_type = ?',['general']);
		$admission_question = DB::select('select * from college_forum_questions where question_type = ?',['admission']);
		$campus_question = DB::select('select * from college_forum_questions where question_type = ?',['campus']);
		$placement_question = DB::select('select * from college_forum_questions where question_type = ?',['placement']);
		if(Session::has('email')){
			$user = DB::select('SELECT * FROM users WHERE user_email = ?',[Session::get('email')]);	
			return view('/ambassadors/ambassador')->with(array(
				'result' => $results,
				'college' => $ambs_college['0']->college_name,
				'general_question' => $general_question,
				'admission_question' => $admission_question,
				'campus_question' => $campus_question,
				'placement_question' => $placement_question,
				'user' => $user['0']
				));
		}else{
			return view('/ambassadors/non_ambassador')->with(array(
				'result' => $results,
				'college' => $ambs_college['0']->college_name,
				'general_question' => $general_question,
				'admission_question' => $admission_question,
				'campus_question' => $campus_question,
				'placement_question' => $placement_question
				));
		}
	}

	public function ambs_home()
	{	
		$general_question = DB::select('select * from college_forum_questions where question_type = ?',['general']);
		$admission_question = DB::select('select * from college_forum_questions where question_type = ?',['admission']);
		$campus_question = DB::select('select * from college_forum_questions where question_type = ?',['campus']);
		$placement_question = DB::select('select * from college_forum_questions where question_type = ?',['placement']);
		if(Session::has('email'))
		{	
			$ambassador = DB::select('SELECT * FROM ambassadors WHERE ambassadors_email = ?',[Session::get('email')]);
			$ambs_college = DB::select('SELECT college_name FROM college WHERE college_id = ?',[$ambassador['0']->ambassadors_college_id]);	
			return view('/ambassadors/ambassador_home')->with(array(
				'college' => $ambs_college['0']->college_name,
				'general_question' => $general_question,
				'admission_question' => $admission_question,
				'campus_question' => $campus_question,
				'placement_question' => $placement_question,
				'ambassador' => $ambassador['0']
				));
		}

	}

	public function notification()
	{
		
		return view('ambassadors/notification');
	}

	public function profile()
	{
		
		return view('ambassadors/profile');
	}

	public function editProfile(Request $request)
	{
		$name = $request->input('name');
		$email = $request->input('email');
		$mobile = $request->input('mobile');

		DB::update('UPDATE ambassadors SET ambassadors_name = ?, ambassadors_email = ?, mobile_number = ? WHERE ambassadors_email = ?',[$name,$email,$mobile,Session::get('email')]);
		return redirect()->back();
	}

	public function settings()
	{
		$ambassador = DB::select('SELECT * FROM ambassadors WHERE ambassadors_email = ?',[Session::get('email')]);
		return view('ambassadors/settings')->with(array(
			'ambassador' => $ambassador['0']
			));
	}

	public function saveSettings(Request $request)
	{
		$intro = $request->input('ambs_intro');

		DB::update('UPDATE ambassadors SET ambassadors_intro = ?',[$intro]);

		return redirect('ambs/settings');
	}

	public function signout()
	{
		Session::forget('email');
		return redirect('signout');
	}
	

}