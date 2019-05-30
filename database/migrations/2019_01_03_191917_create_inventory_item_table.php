<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateInventoryItemTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        if ( !Schema::hasTable('inventory_item') ) {
		Schema::create('inventory_item', function(Blueprint $table)

		{
			$table->integer('inventory_number')->unsigned();
			$table->bigInteger('store_key')->unsigned();
			$table->date('inventory_date');
			$table->integer('block_number')->unsigned();
			$table->integer('count_number')->unsigned();
			$table->smallInteger('sequence')->unsigned();
			$table->boolean('voided')->nullable();
			$table->bigInteger('plu_id')->unsigned();
			$table->string('desc_plu', 48);
			$table->decimal('quantity', 15, 3);
			$table->decimal('unit_price', 15, 3);
			$table->decimal('amount', 15, 3);
			$table->decimal('cost', 15, 4);
			$table->smallInteger('pos_number')->unsigned();
			$table->bigInteger('authorizer_key')->unsigned()->nullable();
			$table->char('sku_id', 14)->nullable();
			$table->boolean('scanned')->nullable();
			$table->bigInteger('cpu_clock')->unsigned()->nullable();
			$table->char('pos_id', 4)->nullable();
			$table->decimal('tax_percent', 6, 3)->nullable();
			$table->primary(['inventory_number','store_key','inventory_date','block_number','count_number','sequence'], 'index_inventory_item');
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
		Schema::drop('inventory_item');
	}
}
