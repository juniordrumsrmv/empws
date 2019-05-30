<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePlanMediaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        if ( !Schema::hasTable('plan_media') ) {
		Schema::create('plan_media', function(Blueprint $table)

		{
			$table->bigInteger('plan_key')->unsigned();
			$table->smallInteger('media_id');
			$table->smallInteger('media_sub_id')->unsigned();
			$table->dateTime('last_change_time')->nullable();
			$table->primary(['plan_key','media_id','media_sub_id'], 'index_plan_media');
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
		Schema::drop('plan_media');
	}
}
