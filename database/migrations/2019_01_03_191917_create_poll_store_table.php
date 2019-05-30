<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePollStoreTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        if ( !Schema::hasTable('poll_store') ) {
		Schema::create('poll_store', function(Blueprint $table)

		{
			$table->bigInteger('store_key')->unsigned();
			$table->bigInteger('poll_key')->unsigned();
			$table->primary(['store_key','poll_key'], 'index_poll_store');
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
		Schema::drop('poll_store');
	}
}
