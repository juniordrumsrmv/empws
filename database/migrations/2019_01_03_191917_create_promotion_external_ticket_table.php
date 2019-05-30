<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePromotionExternalTicketTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        if ( !Schema::hasTable('promotion_external_ticket') ) {
		Schema::create('promotion_external_ticket', function(Blueprint $table)

		{
			$table->bigInteger('promotion_key')->unsigned();
			$table->bigInteger('store_key')->unsigned()->nullable();
			$table->smallInteger('pos_number')->unsigned()->nullable();
			$table->integer('ticket_number')->unsigned()->nullable();
			$table->dateTime('start_time')->nullable();
			$table->decimal('amount', 15)->nullable();
			$table->bigInteger('customer_id')->unsigned();
			$table->dateTime('received_time')->nullable();
			$table->string('prize_coupon', 60)->nullable();
			$table->bigInteger('points')->unsigned()->nullable();
			$table->integer('count_ticket')->unsigned()->nullable();
			$table->string('token')->nullable();
			$table->dateTime('effective_date')->nullable();
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
		Schema::drop('promotion_external_ticket');
	}
}
