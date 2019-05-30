<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateNfceEventTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        if ( !Schema::hasTable('nfce_event') ) {
		Schema::create('nfce_event', function(Blueprint $table)

		{
			$table->bigInteger('store_key')->unsigned();
			$table->smallInteger('pos_number')->unsigned();
			$table->bigInteger('nfce_number')->unsigned();
			$table->dateTime('start_time');
			$table->dateTime('event_time');
			$table->smallInteger('event_status')->unsigned()->nullable();
			$table->string('event_desc', 250)->nullable();
			$table->primary(['store_key','pos_number','nfce_number','start_time','event_time'], 'index_nfce_event');
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
		Schema::drop('nfce_event');
	}
}
