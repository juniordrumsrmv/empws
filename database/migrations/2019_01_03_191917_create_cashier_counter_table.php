<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCashierCounterTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        if ( !Schema::hasTable('cashier_counter') ) {
		Schema::create('cashier_counter', function(Blueprint $table)

		{
			$table->bigInteger('agent_key')->unsigned();
			$table->smallInteger('counter_number')->unsigned();
			$table->bigInteger('counter_times')->unsigned();
			$table->decimal('counter_qty', 15, 3);
			$table->decimal('counter_amount', 15, 3);
			$table->primary(['agent_key','counter_number'], 'index_cashier_counter');
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
		Schema::drop('cashier_counter');
	}
}
