<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCustomerStoreTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        if ( !Schema::hasTable('customer_store') ) {
		Schema::create('customer_store', function(Blueprint $table)

		{
			$table->bigInteger('customer_key')->unsigned();
			$table->bigInteger('store_key')->unsigned();
			$table->dateTime('last_sale_time')->nullable();
			$table->smallInteger('qty_sale')->unsigned()->nullable();
			$table->dateTime('last_change_time');
			$table->primary(['customer_key','store_key'], 'index_customer_store');
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
		Schema::drop('customer_store');
	}
}
