<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDotzFileTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        if ( !Schema::hasTable('dotz_file') ) {
		Schema::create('dotz_file', function(Blueprint $table)

		{
			$table->bigInteger('file_key', true)->unsigned();
			$table->bigInteger('store_key')->unsigned();
			$table->bigInteger('plu_key_list_id')->unsigned();
			$table->string('plu_list_description', 60)->nullable();
			$table->dateTime('last_change_time')->nullable();
			$table->smallInteger('file_type')->unsigned()->nullable();
			$table->unique(['file_key','store_key','plu_key_list_id'], 'index_dotz_file');
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
		Schema::drop('dotz_file');
	}
}
