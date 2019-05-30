<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateInventoryCountControlTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        if ( !Schema::hasTable('inventory_count_control') ) {
		Schema::create('inventory_count_control', function(Blueprint $table)

		{
			$table->integer('inventory_number')->unsigned();
			$table->bigInteger('store_key')->unsigned();
			$table->date('inventory_date');
			$table->integer('block_number')->unsigned();
			$table->integer('count_number')->unsigned();
			$table->smallInteger('status')->unsigned();
			$table->primary(['inventory_number','store_key','inventory_date','block_number','count_number'], 'index_inventory_count_control');
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
		Schema::drop('inventory_count_control');
	}
}
