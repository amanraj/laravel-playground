<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAmbassadorsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ambassadors', function(Blueprint $table)
		{
			$table->increments('ambassadors_id');
			$table->string('ambassadors_name');
			$table->string('ambassadors_email')->unique();
			$table->string('ambassadors_password', 60);
			$table->string('mobile_number',11);
			$table->string('profile_pic');
			$table->integer('ambassadors_college_id');
			$table->string('branch');
			$table->longText('ambassadors_intro');
			$table->string('ip_address',20);
			$table->rememberToken();
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('ambassadors');
	}

}
