<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCronControlTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        if ( !Schema::hasTable('cron_control') ) {
		Schema::create('cron_control', function(Blueprint $table)

		{
			$table->bigInteger('entity_key')->unsigned()->nullable();
			$table->dateTime('cronctl_reference_time')->nullable();
			$table->dateTime('cronctl_start_time')->nullable();
			$table->dateTime('cronctl_end_time')->nullable();
			$table->string('cronctl_output')->nullable();
			$table->unique(['entity_key','cronctl_reference_time','cronctl_start_time'], 'index_entity_id');
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
		Schema::drop('cron_control');
	}
}
