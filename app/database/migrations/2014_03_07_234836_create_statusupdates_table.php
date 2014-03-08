<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateStatusupdatesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('statusupdates', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('type');
			$table->integer('stage_id');
			$table->integer('user');
			$table->integer('status');
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
		Schema::drop('statusupdates');
	}

}
