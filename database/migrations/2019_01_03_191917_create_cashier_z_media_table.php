<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCashierZMediaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        if ( !Schema::hasTable('cashier_z_media') ) {
		Schema::create('cashier_z_media', function(Blueprint $table)

		{
			$table->bigInteger('store_key')->unsigned();
			$table->smallInteger('pos_number')->unsigned();
			$table->integer('ticket_number')->unsigned();
			$table->dateTime('start_time');
			$table->smallInteger('sequence')->unsigned();
			$table->smallInteger('media_id')->unsigned();
			$table->boolean('document_control')->nullable();
			$table->decimal('amount_entered', 15, 3)->nullable();
			$table->decimal('amount_voided', 15, 3)->nullable();
			$table->decimal('amount_loan', 15, 3)->nullable();
			$table->decimal('amount_pickup', 15, 3)->nullable();
			$table->integer('transaction_number')->unsigned();
			$table->primary(['store_key','pos_number','ticket_number','start_time','sequence'], 'index_cashier_z_media');
			$table->index(['store_key','pos_number','transaction_number','start_time'], 'index_cashier_z_1');
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
		Schema::drop('cashier_z_media');
	}
}
