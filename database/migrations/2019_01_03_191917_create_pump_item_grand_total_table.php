<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePumpItemGrandTotalTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        if ( !Schema::hasTable('pump_item_grand_total') ) {
		Schema::create('pump_item_grand_total', function(Blueprint $table)

		{
			$table->date('fiscal_date');
			$table->bigInteger('store_key')->unsigned();
			$table->smallInteger('pump_number')->unsigned();
			$table->bigInteger('plu_key')->unsigned();
			$table->decimal('amount', 15, 3);
			$table->decimal('qty', 15, 3);
			$table->smallInteger('nozzle_number')->unsigned();
			$table->primary(['fiscal_date','store_key','pump_number','plu_key','nozzle_number'], 'index_pump_item_grand_total');
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
		Schema::drop('pump_item_grand_total');
	}
}
