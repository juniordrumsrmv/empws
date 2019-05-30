<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePluStoreTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        if ( !Schema::hasTable('plu_store') ) {
		Schema::create('plu_store', function(Blueprint $table)

		{
			$table->bigInteger('store_key')->unsigned();
			$table->bigInteger('plu_key')->unsigned();
			$table->decimal('desired_margin_percent', 4)->nullable();
			$table->decimal('quantity_in_stock', 15, 3)->nullable();
			$table->date('out_of_stock_day')->nullable();
			$table->date('last_entered_day')->nullable();
			$table->date('last_sale_day')->nullable();
			$table->integer('tax_type_key')->unsigned()->nullable();
			$table->integer('invoice_tax_type')->unsigned()->nullable();
			$table->decimal('minimal_stock', 15, 3)->nullable();
			$table->date('last_inventory_day')->nullable();
			$table->decimal('quantity_inventory', 15, 3)->nullable();
			$table->boolean('not_for_sale')->nullable();
			$table->decimal('split_interest_percent', 4)->nullable();
			$table->decimal('delayed_payment_percent', 4)->nullable();
			$table->boolean('min_splits')->nullable();
			$table->boolean('max_splits')->nullable();
			$table->smallInteger('order_type')->unsigned()->nullable();
			$table->smallInteger('operation_type')->unsigned()->nullable();
			$table->boolean('qty_from_amount')->nullable();
			$table->dateTime('last_change_time')->nullable();
			$table->decimal('wholesale_quantity', 9, 3)->nullable();
			$table->bigInteger('adder')->unsigned()->nullable();
			$table->decimal('total_tax', 7, 3)->nullable();
			$table->decimal('total_tax1', 7, 3)->nullable();
			$table->decimal('total_tax2', 7, 3)->nullable();
			$table->bigInteger('base_plu_key')->unsigned()->nullable();
			$table->decimal('quantity', 9, 3)->nullable();
			$table->boolean('is_base_plu')->nullable();
			$table->decimal('fcp_percent', 15, 3)->nullable();
			$table->primary(['store_key','plu_key'], 'index_plu_store');
			$table->index(['store_key','last_change_time'], 'index_plu_store_1');
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
		Schema::drop('plu_store');
	}
}
