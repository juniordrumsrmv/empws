<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateHistoryVersionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        if ( !Schema::hasTable('history_version') ) {
		Schema::create('history_version', function(Blueprint $table)

		{
			$table->bigInteger('version_key', true)->unsigned();
			$table->smallInteger('database_version')->unsigned()->nullable();
			$table->dateTime('database_update_time')->nullable();
			$table->char('system_version', 12)->nullable();
			$table->string('program_upd', 40)->nullable();
			$table->string('description_upd')->nullable();
			$table->unique(['database_version','version_key'], 'index_version_upd');
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
		Schema::drop('history_version');
	}
}
