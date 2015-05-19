<?php namespace App\Http\Controllers;
use Session;
use DB;
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
		if(Session::has('email')){
			$results = DB::select('select * from ambassadors');
			
			return view('/ambassadors/ambassadors')->with(array(
				'result' => $results
				));
		}else{
			return redirect('/landing');
		}
	}

	public function ambassador($ambassador_id)
	{
		if(Session::has('email')){
			$results = DB::select('select * from ambassadors where ambassadors_id = ?', [$ambassador_id]);
			$general_question = DB::select('select * from college_forum_questions where question_type = ?',['general']);
			$admission_question = DB::select('select * from college_forum_questions where question_type = ?',['admission']);
			$campus_question = DB::select('select * from college_forum_questions where question_type = ?',['campus']);
			$placement_question = DB::select('select * from college_forum_questions where question_type = ?',['placement']);
			return view('/ambassadors/ambassador')->with(array(
				'result' => $results,
				'general_question' => $general_question,
				'admission_question' => $admission_question,
				'campus_question' => $campus_question,
				'placement_question' => $placement_question
				));
		}else{
			return redirect('/landing');
		}
	}
	

}