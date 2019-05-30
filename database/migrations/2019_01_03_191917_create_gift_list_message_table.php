<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGiftListMessageTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        if ( !Schema::hasTable('gift_list_message') ) {
		Schema::create('gift_list_message', function(Blueprint $table)

		{
			$table->bigInteger('gift_list_message_id')->unsigned()->primary();
			$table->string('gift_list_message_text');
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
		Schema::drop('gift_list_message');
	}
}
