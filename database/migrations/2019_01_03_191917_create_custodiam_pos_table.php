<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCustodiamPosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        if ( !Schema::hasTable('custodiam_pos') ) {
		Schema::create('custodiam_pos', function(Blueprint $table)

		{
			$table->bigInteger('store_key');
			$table->smallInteger('pos_number');
			$table->string('pos_name', 30)->nullable();
			$table->primary(['store_key','pos_number'], 'index_custodiam_pos');
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
		Schema::drop('custodiam_pos');
	}
}
