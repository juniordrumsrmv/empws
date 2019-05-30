<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCustodiamStoreTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        if ( !Schema::hasTable('custodiam_store') ) {
		Schema::create('custodiam_store', function(Blueprint $table)

		{
			$table->bigInteger('store_key')->primary();
			$table->string('store_id1', 25);
			$table->string('store_name', 30);
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
		Schema::drop('custodiam_store');
	}
}
