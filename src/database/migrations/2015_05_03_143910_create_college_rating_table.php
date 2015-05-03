<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCollegeRatingTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('college_rating', function(Blueprint $table)
		{
			$table->increments('college_rating_id');
			$table->integer('college_reference_id');
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
		Schema::drop('college_rating');
	}

}
