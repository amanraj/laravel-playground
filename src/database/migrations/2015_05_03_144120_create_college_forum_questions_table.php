<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCollegeForumQuestionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('college_forum_questions', function(Blueprint $table)
		{
			$table->increments('question_id');
			$table->integer('question_college_id');
			$table->integer('user_reference_id');
			$table->string('question_type');
			$table->string('question_title');
			$table->mediumText('question_description');
			$table->interger('want_answer');
			$table->dateTime('date');			
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('college_forum_questions');
	}

}
