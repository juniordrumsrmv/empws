<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMessageTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        if ( !Schema::hasTable('message') ) {
		Schema::create('message', function(Blueprint $table)

		{
			$table->char('message_key', 12);
			$table->char('message_lang', 2);
			$table->string('message_subject', 250)->nullable();
			$table->binary('message_text', 65535)->nullable();
			$table->primary(['message_key','message_lang'], 'index_message');
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
		Schema::drop('message');
	}
}
