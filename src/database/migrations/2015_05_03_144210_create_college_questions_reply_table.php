<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCollegeQuestionsReplyTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('college_questions_reply', function(Blueprint $table)
		{
			$table->increments('college_question_reply_id');
			$table->integer('college_question_reference_id');
			$table->integer('user_reference_id');
			$table->text('reply');
			$table->integer('up_vote');
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
		Schema::drop('college_questions_reply');
	}

}
