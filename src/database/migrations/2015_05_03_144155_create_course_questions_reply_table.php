<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCourseQuestionsReplyTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('course_questions_reply', function(Blueprint $table)
		{
			$table->increments('course_question_reply_id');
			$table->integer('course_question_reference_id');
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
		Schema::drop('course_questions_reply');
	}

}
