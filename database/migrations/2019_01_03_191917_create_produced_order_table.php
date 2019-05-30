<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProducedOrderTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        if ( !Schema::hasTable('produced_order') ) {
		Schema::create('produced_order', function(Blueprint $table)

		{
			$table->bigInteger('order_key', true)->unsigned();
			$table->bigInteger('store_key')->unsigned();
			$table->bigInteger('plu_key_prod')->unsigned();
			$table->smallInteger('unit_key')->unsigned()->nullable();
			$table->decimal('base_quantity', 6, 3);
			$table->decimal('quantity', 6, 3);
			$table->dateTime('insert_date')->nullable();
			$table->dateTime('update_date')->nullable();
			$table->dateTime('production_date')->nullable();
			$table->smallInteger('order_status')->unsigned()->nullable();
			$table->decimal('cost', 6, 3)->nullable();
			$table->decimal('price_suggestion', 6, 3)->nullable();
			$table->index(['store_key','plu_key_prod'], 'index_store_order');
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
		Schema::drop('produced_order');
	}
}
