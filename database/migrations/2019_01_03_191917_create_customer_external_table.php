<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCustomerExternalTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        if ( !Schema::hasTable('customer_external') ) {
		Schema::create('customer_external', function(Blueprint $table)

		{
			$table->bigInteger('customer_key')->unsigned();
			$table->bigInteger('customer_store_key')->unsigned()->nullable();
			$table->smallInteger('customer_pos_number')->unsigned()->nullable();
			$table->integer('customer_ticket_number')->unsigned()->nullable();
			$table->dateTime('customer_start_time')->nullable();
			$table->dateTime('customer_received_time')->nullable();
			$table->string('customer_prize_coupon', 60)->nullable();
			$table->bigInteger('customer_points')->unsigned()->nullable();
			$table->string('customer_token')->nullable();
			$table->dateTime('customer_effective_date')->nullable();
			$table->smallInteger('customer_status')->unsigned();
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
		Schema::drop('customer_external');
	}
}
