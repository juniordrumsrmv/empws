<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCashierMediaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        if ( !Schema::hasTable('cashier_media') ) {
		Schema::create('cashier_media', function(Blueprint $table)

		{
			$table->bigInteger('agent_key')->unsigned();
			$table->smallInteger('media_key')->unsigned();
			$table->bigInteger('qty_entered')->unsigned();
			$table->bigInteger('qty_voided')->unsigned();
			$table->bigInteger('qty_loan')->unsigned();
			$table->bigInteger('qty_pickup')->unsigned();
			$table->decimal('amount_entered', 15, 3);
			$table->decimal('amount_voided', 15, 3);
			$table->decimal('amount_loan', 15, 3);
			$table->decimal('amount_pickup', 15, 3);
			$table->primary(['agent_key','media_key'], 'index_cashier_media');
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
		Schema::drop('cashier_media');
	}
}
