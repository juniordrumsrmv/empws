<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePluBatchStockTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        if ( !Schema::hasTable('plu_batch_stock') ) {
		Schema::create('plu_batch_stock', function(Blueprint $table)

		{
			$table->bigInteger('plu_key')->unsigned();
			$table->bigInteger('store_key')->unsigned();
			$table->string('batch', 50);
			$table->date('batch_manufacture')->nullable();
			$table->date('batch_expiration')->nullable();
			$table->decimal('quantity_in_stock', 15, 3);
			$table->dateTime('last_change_time')->nullable();
			$table->primary(['plu_key','store_key','batch'], 'index_plu_batch_stock');
			$table->index(['plu_key','store_key','batch','batch_expiration'], 'sngpc_batch_index_1');
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
		Schema::drop('plu_batch_stock');
	}
}
