<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCollegeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('college', function(Blueprint $table)
		{
			$table->increments('college_id');
			$table->string('college_name');
			$table->string('college_type');
			$table->string('college_location');
			$table->string('college_accreditation');
			$table->string('college_contact_number');
			$table->string('college_email');
			$table->string('college_website');
			$table->string('college_entrance_exam');
			$table->tinyText('college_fees');
			$table->mediumText('college_fees_details');
			$table->mediumText('college_addmision_process');
			$table->mediumText('college_overview');
			$table->mediumText('college_hostels');
			$table->mediumText('college_fests');
			$table->mediumText('college_other_facilities');
			$table->mediumText('college_placement');
			$table->Text('college_comments');
			$table->string('college_image_1');
			$table->string('college_image_2');
			$table->string('college_image_3');
			$table->string('college_image_4');
			$table->string('college_image_5');
			$table->string('college_image_6');
			
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('college');
	}

}
