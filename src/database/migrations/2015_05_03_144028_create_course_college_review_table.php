<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCourseCollegeReviewTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('course_college_review', function(Blueprint $table)
		{
			$table->increments('course_college_review_id');
			$table->integer('course_reference_id');
			$table->integer('college_reference_id');
			$table->dateTime('review_date');
			$table->float('course_content_rating');
			$table->float('course_placement_rating');
			$table->float('course_future_scope_rating');
			$table->float('course_faculty_rating');
			$table->text('course_content');
			$table->text('faculty');
			$table->text('top_institutes');
			$table->text('future_scope');
			$table->text('placement')
			$table->text('job_place_work');
			$table->string('reviewer_name');
			$table->string('reviewer_description');
			$table->string('reviewer_college');
			$table->float('reviewer_rating');
			$table->text('review');			
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('course_college_review');
	}

}
