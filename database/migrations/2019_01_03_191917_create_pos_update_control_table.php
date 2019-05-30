<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePosUpdateControlTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        if ( !Schema::hasTable('pos_update_control') ) {
		Schema::create('pos_update_control', function(Blueprint $table)

		{
			$table->boolean('update_type');
			$table->bigInteger('store_key')->unsigned();
			$table->bigInteger('update_number')->unsigned();
			$table->dateTime('start_time');
			$table->boolean('transaction_status');
			$table->integer('process_id')->unsigned();
			$table->primary(['update_type','store_key','update_number','start_time'], 'index_pos_update_control');
			$table->index(['update_type','store_key','transaction_status'], 'pos_update_control_status');
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
		Schema::drop('pos_update_control');
	}
}
