<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCashierLoanTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        if ( !Schema::hasTable('cashier_loan') ) {
		Schema::create('cashier_loan', function(Blueprint $table)

		{
			$table->bigInteger('agent_key')->unsigned();
			$table->smallInteger('media_key')->unsigned();
			$table->dateTime('insert_time')->nullable();
			$table->decimal('amount', 15, 3)->nullable();
			$table->bigInteger('store_key')->unsigned();
			$table->smallInteger('pos_number')->unsigned();
			$table->integer('ticket_number')->unsigned();
			$table->primary(['agent_key','media_key'], 'index_cashier_loan');
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
		Schema::drop('cashier_loan');
	}
}
