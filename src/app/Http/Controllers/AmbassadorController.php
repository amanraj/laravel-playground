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
		
			$results = DB::select('select * from ambassadors');
		if(Session::has('email')){	
			return view('/ambassadors/ambassadors')->with(array(
				'result' => $results
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
			return view('/ambassadors/ambassador')->with(array(
				'result' => $results,
				'college' => $ambs_college['0']->college_name,
				'general_question' => $general_question,
				'admission_question' => $admission_question,
				'campus_question' => $campus_question,
				'placement_question' => $placement_question
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
	

}