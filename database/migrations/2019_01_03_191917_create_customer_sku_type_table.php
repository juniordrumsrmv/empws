<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCustomerSkuTypeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        if ( !Schema::hasTable('customer_sku_type') ) {
		Schema::create('customer_sku_type', function(Blueprint $table)

		{
			$table->smallInteger('customer_sku_type_key')->unsigned()->primary();
			$table->string('customer_sku_type_name', 20)->nullable();
			$table->boolean('customer_sku_type_send')->nullable();
			$table->boolean('customer_sku_type_flag_1')->nullable();
			$table->boolean('customer_sku_type_flag_2')->nullable();
			$table->boolean('customer_sku_type_flag_3')->nullable();
			$table->boolean('customer_sku_type_flag_4')->nullable();
			$table->boolean('customer_sku_type_flag_5')->nullable();
			$table->boolean('customer_sku_type_flag_6')->nullable();
			$table->boolean('customer_sku_type_flag_7')->nullable();
			$table->boolean('customer_sku_type_flag_8')->nullable();
			$table->dateTime('last_change_time')->nullable();
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
		Schema::drop('customer_sku_type');
	}
}
