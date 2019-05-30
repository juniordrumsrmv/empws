<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBackupControlTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        if ( !Schema::hasTable('backup_control') ) {
		Schema::create('backup_control', function(Blueprint $table)

		{
			$table->bigInteger('backup_key', true)->unsigned();
			$table->boolean('backup_type')->nullable();
			$table->dateTime('creation_time')->nullable();
			$table->string('comment')->nullable();
			$table->boolean('menu_item')->nullable();
			$table->boolean('entity')->nullable();
			$table->boolean('access_control')->nullable();
			$table->index(['backup_type','creation_time'], 'index_backup_control');
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
		Schema::drop('backup_control');
	}
}
