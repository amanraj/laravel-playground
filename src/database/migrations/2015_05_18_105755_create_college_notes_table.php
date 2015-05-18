<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCollegeNotesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('college_notes', function(Blueprint $table)
		{
			$table->integer('college_notes_id')
			$table->integer('user_reference_id');
			$table->integer('college_reference_id');
			$table->string('note_title');
			$table->text('note_body');
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
		Schema::drop('college_notes');
	}

}
