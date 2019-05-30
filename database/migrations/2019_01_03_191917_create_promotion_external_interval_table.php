<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePromotionExternalIntervalTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        if ( !Schema::hasTable('promotion_external_interval') ) {
		Schema::create('promotion_external_interval', function(Blueprint $table)

		{
			$table->bigInteger('promotion_key')->unsigned();
			$table->dateTime('start')->nullable();
			$table->dateTime('finish')->nullable();
			$table->bigInteger('store_key')->unsigned()->nullable();
			$table->smallInteger('cst_id_type')->unsigned()->nullable();
			$table->bigInteger('points')->unsigned()->nullable();
			$table->integer('count_ticket')->unsigned();
			$table->integer('accum_ticket')->unsigned();
			$table->decimal('amount', 15)->nullable();
			$table->text('promo_data')->nullable();
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
		Schema::drop('promotion_external_interval');
	}
}
