<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCheckingSystemTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        if ( !Schema::hasTable('checking_system') ) {
		Schema::create('checking_system', function(Blueprint $table)

		{
			$table->bigInteger('checking_system_key', true)->unsigned();
			$table->bigInteger('store_key')->unsigned()->nullable();
			$table->smallInteger('pos_number')->unsigned()->nullable();
			$table->smallInteger('checking_system_type')->unsigned()->nullable();
			$table->dateTime('checking_system_time')->nullable();
			$table->binary('checking_system_data', 65535)->nullable();
			$table->index(['store_key','pos_number','checking_system_type','checking_system_time'], 'index_checking_system');
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
		Schema::drop('checking_system');
	}
}
