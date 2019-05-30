<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGlobalStatisticsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        if ( !Schema::hasTable('global_statistics') ) {
		Schema::create('global_statistics', function(Blueprint $table)

		{
			$table->char('s_module', 1);
			$table->char('s_name', 9);
			$table->dateTime('s_time');
			$table->bigInteger('store_key')->unsigned();
			$table->smallInteger('pos_number')->unsigned();
			$table->bigInteger('s_value')->unsigned()->nullable();
			$table->primary(['s_module','s_name','s_time','store_key','pos_number'], 'index_global_statistics');
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
		Schema::drop('global_statistics');
	}
}
