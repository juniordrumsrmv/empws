<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePromotionExternalTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        if ( !Schema::hasTable('promotion_external') ) {
		Schema::create('promotion_external', function(Blueprint $table)

		{
			$table->bigInteger('promotion_key')->unsigned();
			$table->string('name', 50)->nullable();
			$table->dateTime('start')->nullable();
			$table->dateTime('finish')->nullable();
			$table->bigInteger('store_key')->unsigned()->nullable();
			$table->smallInteger('promo_type')->unsigned()->nullable();
			$table->smallInteger('promo_mode')->unsigned()->nullable();
			$table->smallInteger('sale_status')->unsigned()->nullable();
			$table->smallInteger('sale_state')->unsigned()->nullable();
			$table->decimal('amount', 15)->nullable();
			$table->dateTime('received_time')->nullable();
			$table->string('prize_coupon', 60)->nullable();
			$table->string('token')->nullable();
			$table->text('promo_data')->nullable();
			$table->dateTime('effective_date')->nullable();
			$table->smallInteger('send_pos')->unsigned();
			$table->smallInteger('status')->unsigned();
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
		Schema::drop('promotion_external');
	}
}
