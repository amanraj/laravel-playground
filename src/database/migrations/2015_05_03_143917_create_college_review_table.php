<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCollegeReviewTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('college_review', function(Blueprint $table)
		{
			$table->increments('college_review_id');
			$table->integer('college_reference_id');
			$table->string('reviewer_name');
			$table->string('reviewer_college');
			$table->string('reviewer_description');
			$table->dateTime('college_review_date');
			$table->text('college_pros');
			$table->text('college_cons');
			$table->float('college_overall_rating');
			$table->float('college_campuslife_rating');
			$table->float('college_hostel_rating');
			$table->float('college_location_rating');
			$table->float('college_facilities_rating');	
			
			
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('college_review');
	}

}
