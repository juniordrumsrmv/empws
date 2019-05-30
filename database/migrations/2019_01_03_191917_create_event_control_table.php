<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEventControlTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        if ( !Schema::hasTable('event_control') ) {
		Schema::create('event_control', function(Blueprint $table)

		{
			$table->bigInteger('evctl_key', true)->unsigned();
			$table->char('evctl_id', 32);
			$table->bigInteger('agent_key')->unsigned()->nullable();
			$table->dateTime('evctl_time')->nullable();
			$table->index(['evctl_id','agent_key'], 'event_control_index');
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
		Schema::drop('event_control');
	}
}
