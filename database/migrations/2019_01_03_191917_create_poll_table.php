<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePollTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        if ( !Schema::hasTable('poll') ) {
		Schema::create('poll', function(Blueprint $table)

		{
			$table->bigInteger('poll_key', true)->unsigned();
			$table->boolean('poll_type')->nullable();
			$table->string('poll_name')->nullable();
			$table->string('poll_display_name')->nullable();
			$table->dateTime('start_time')->nullable();
			$table->dateTime('finish_time')->nullable();
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
		Schema::drop('poll');
	}
}
