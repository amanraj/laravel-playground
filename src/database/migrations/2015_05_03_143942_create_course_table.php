<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCourseTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('course', function(Blueprint $table)
		{
			$table->increments('course_id');
			$table->string('course_name');
			$table->string('course_stream');
			$table->mediumText('course_content');
			$table->mediumText('future_scope');
			$table->mediumText('job_place_work');
			$table->string('top_institute');
			$table->string('course_image_1');
			$table->string('course_image_2');
			$table->string('course_image_3');
			$table->string('course_image_4');			
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('course');
	}

}
