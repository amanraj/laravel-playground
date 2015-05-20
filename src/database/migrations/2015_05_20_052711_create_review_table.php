<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReviewTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('review', function(Blueprint $table)
		{
			$table->increments('review_id');
			$table->string('name')->nullable;
			$table->string('college');
			$table->string('branch');
			$table->string('year');
			$table->integer('campuslife');
			$table->integer('hostel');
			$table->integer('location');
			$table->integer('facilities');
			$table->text('merits');
			$table->text('demerits');
			$table->text('comments')->nullable;
			$table->timestamp('created_at');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('review');
	}

}
