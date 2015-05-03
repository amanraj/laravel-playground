<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCourseReviewTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('course_review', function(Blueprint $table)
		{
			$table->increments('course_review_id');
			$table->integer('course_reference_id');
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
		Schema::drop('course_review');
	}

}
