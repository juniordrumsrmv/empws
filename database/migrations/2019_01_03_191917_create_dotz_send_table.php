<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDotzSendTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        if ( !Schema::hasTable('dotz_send') ) {
		Schema::create('dotz_send', function(Blueprint $table)

		{
			$table->bigInteger('file_key')->unsigned();
			$table->bigInteger('store_key')->unsigned();
			$table->dateTime('last_send_time');
			$table->primary(['file_key','store_key'], 'index_dotz_send');
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
		Schema::drop('dotz_send');
	}
}
