<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMinutradeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        if ( !Schema::hasTable('minutrade') ) {
		Schema::create('minutrade', function(Blueprint $table)

		{
			$table->bigInteger('store_key')->unsigned()->nullable();
			$table->smallInteger('pos_number')->unsigned()->nullable();
			$table->integer('ticket_number')->unsigned()->nullable();
			$table->dateTime('start_time')->nullable();
			$table->dateTime('send_time')->nullable();
			$table->string('customer_token')->nullable();
			$table->bigInteger('mobile')->unsigned()->nullable();
			$table->dateTime('effective_date')->nullable();
			$table->smallInteger('status')->unsigned();
			$table->integer('http_code')->unsigned()->nullable();
			$table->text('request_data')->nullable();
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
		Schema::drop('minutrade');
	}
}
