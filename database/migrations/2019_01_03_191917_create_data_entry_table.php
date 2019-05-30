<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDataEntryTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        if ( !Schema::hasTable('data_entry') ) {
		Schema::create('data_entry', function(Blueprint $table)

		{
			$table->increments('data_entry_key');
			$table->string('initial_prompt', 80)->nullable();
			$table->string('name', 50)->nullable();
		});

        }

	}
	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('data_entry');
	}
}
