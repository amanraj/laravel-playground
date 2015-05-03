<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCourseForumQuestionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('course_forum_questions', function(Blueprint $table)
		{
			$table->increments('question_id');
			$table->integer('question_course_id');
			$table->integer('user_reference_id');
			$table->string('question_type');
			$table->string('question_title');
			$table->string('question_description');
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
		Schema::drop('course_forum_questions');
	}

}
