<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePosProgramTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        if ( !Schema::hasTable('pos_program') ) {
		Schema::create('pos_program', function(Blueprint $table)

		{
			$table->bigInteger('store_key')->unsigned();
			$table->smallInteger('pos_number')->unsigned();
			$table->char('program_id', 20);
			$table->string('program_version')->nullable();
			$table->string('program_version_line')->nullable();
			$table->string('program_executable')->nullable();
			$table->primary(['store_key','pos_number','program_id'], 'index_pos_program');
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
		Schema::drop('pos_program');
	}
}
