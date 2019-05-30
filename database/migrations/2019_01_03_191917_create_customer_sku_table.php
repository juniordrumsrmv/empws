<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCustomerSkuTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        if ( !Schema::hasTable('customer_sku') ) {
		Schema::create('customer_sku', function(Blueprint $table)

		{
			$table->char('customer_sku_id', 30);
			$table->smallInteger('customer_sku_type_key')->unsigned();
			$table->bigInteger('customer_key')->unsigned()->index('index_sku_customer_key');
			$table->boolean('customer_sku_status')->nullable();
			$table->decimal('customer_sku_limit', 15)->nullable();
			$table->decimal('customer_sku_amount_left', 15)->nullable();
			$table->bigInteger('customer_sku_points')->unsigned()->nullable();
			$table->string('customer_sku_password', 80)->nullable();
			$table->string('customer_sku_password_md5', 80)->nullable();
			$table->dateTime('last_change_time');
			$table->primary(['customer_sku_id','customer_sku_type_key'], 'index_customer_sku');
			$table->index(['last_change_time','customer_key'], 'index_sku_change');
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
		Schema::drop('customer_sku');
	}
}
