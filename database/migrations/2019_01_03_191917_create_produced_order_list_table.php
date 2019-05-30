<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProducedOrderListTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        if ( !Schema::hasTable('produced_order_list') ) {
		Schema::create('produced_order_list', function(Blueprint $table)

		{
			$table->bigInteger('order_key')->unsigned();
			$table->bigInteger('store_key')->unsigned();
			$table->bigInteger('plu_key_prod')->unsigned();
			$table->bigInteger('plu_key_input')->unsigned();
			$table->decimal('base_quantity', 8, 3);
			$table->primary(['order_key','store_key','plu_key_prod','plu_key_input'], 'index_produced_order_list');
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
		Schema::drop('produced_order_list');
	}
}
