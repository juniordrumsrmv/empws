<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFarmServerStoreTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        if ( !Schema::hasTable('farm_server_store') ) {
		Schema::create('farm_server_store', function(Blueprint $table)

		{
			$table->smallInteger('farm_server_key')->unsigned();
			$table->bigInteger('store_key')->unsigned();
			$table->primary(['farm_server_key','store_key'], 'index_farm_server_store');
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
		Schema::drop('farm_server_store');
	}
}
