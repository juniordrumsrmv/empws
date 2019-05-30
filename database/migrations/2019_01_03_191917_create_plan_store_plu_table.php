<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePlanStorePluTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        if ( !Schema::hasTable('plan_store_plu') ) {
		Schema::create('plan_store_plu', function(Blueprint $table)

		{
			$table->bigInteger('plan_key')->unsigned();
			$table->bigInteger('store_key')->unsigned();
			$table->smallInteger('store_group_key')->unsigned()->default(0);
			$table->bigInteger('plu_key')->unsigned();
			$table->dateTime('last_change_time')->nullable();
			$table->primary(['store_key','store_group_key','plu_key','plan_key'], 'index_plan_store_plu');
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
		Schema::drop('plan_store_plu');
	}
}
