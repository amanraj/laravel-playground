<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCourseCollegeRatingTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('course_college_rating', function(Blueprint $table)
		{
			$table->increments('course_college_rating_id');
			$table->integer('course_reference_id');
			$table->integer('college_reference_id');
			$table->float('course_content_rating');
			$table->float('course_placement_rating');
			$table->float('course_future_scope_rating');
			$table->float('course_faculty_rating');			
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('course_college_rating');
	}

}
