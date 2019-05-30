<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCashierZTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        if ( !Schema::hasTable('cashier_z') ) {
		Schema::create('cashier_z', function(Blueprint $table)

		{
			$table->bigInteger('store_key')->unsigned();
			$table->smallInteger('pos_number')->unsigned();
			$table->integer('ticket_number')->unsigned();
			$table->dateTime('start_time');
			$table->bigInteger('cashier_key')->unsigned()->nullable();
			$table->bigInteger('authorizer_key')->unsigned()->nullable();
			$table->boolean('status')->nullable();
			$table->integer('transaction_number')->unsigned();
			$table->primary(['store_key','pos_number','ticket_number','start_time'], 'index_cashier_z');
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
		Schema::drop('cashier_z');
	}
}
