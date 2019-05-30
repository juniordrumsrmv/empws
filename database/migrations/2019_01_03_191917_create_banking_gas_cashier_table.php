<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBankingGasCashierTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        if ( !Schema::hasTable('banking_gas_cashier') ) {
		Schema::create('banking_gas_cashier', function(Blueprint $table)

		{
			$table->bigInteger('store_key')->unsigned();
			$table->smallInteger('pos_number')->unsigned();
			$table->integer('ticket_number')->unsigned();
			$table->dateTime('start_time');
			$table->bigInteger('cashier_key')->unsigned()->nullable();
			$table->primary(['store_key','pos_number','ticket_number','start_time'], 'index_banking_gas_cashier');
			$table->index(['store_key','pos_number','ticket_number','start_time','cashier_key'], 'banking_gas_cashier_key');
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
		Schema::drop('banking_gas_cashier');
	}
}
