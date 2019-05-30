<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateNozzleTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        if ( !Schema::hasTable('nozzle') ) {
		Schema::create('nozzle', function(Blueprint $table)

		{
			$table->bigInteger('store_key')->unsigned();
			$table->bigInteger('tank_number')->unsigned();
			$table->bigInteger('pump_number')->unsigned();
			$table->bigInteger('nozzle_number')->unsigned();
			$table->bigInteger('increase_gt_qty')->unsigned()->nullable()->default(0);
			$table->bigInteger('increase_gt_amo')->unsigned()->nullable()->default(0);
			$table->primary(['store_key','tank_number','nozzle_number'], 'index_nozzle');
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
		Schema::drop('nozzle');
	}
}
