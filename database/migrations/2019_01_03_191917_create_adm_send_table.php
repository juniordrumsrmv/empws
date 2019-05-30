<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAdmSendTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        if ( !Schema::hasTable('adm_send') ) {
		Schema::create('adm_send', function(Blueprint $table)

		{
			$table->string('table_name', 30);
			$table->string('field', 30);
			$table->string('name', 50)->nullable();
			$table->text('description', 65535)->nullable();
			$table->string('tag', 30)->nullable();
			$table->boolean('flag_online')->nullable()->default(0);
			$table->boolean('flag_send')->nullable()->default(0);
			$table->dateTime('last_change_time')->nullable();
			$table->string('module', 30);
			$table->index(['table_name','field'], 'adm_send_index');
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
		Schema::drop('adm_send');
	}
}
