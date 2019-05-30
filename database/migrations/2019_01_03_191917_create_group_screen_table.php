<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGroupScreenTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        if ( !Schema::hasTable('group_screen') ) {
		Schema::create('group_screen', function(Blueprint $table)

		{
			$table->bigInteger('group_screen_key')->unsigned();
			$table->string('group_screen_name', 50)->nullable();
			$table->boolean('group_mode')->nullable();
			$table->smallInteger('total_rows')->unsigned()->nullable();
			$table->smallInteger('total_cols')->unsigned()->nullable();
			$table->smallInteger('space_rows')->unsigned()->nullable();
			$table->smallInteger('space_cols')->unsigned()->nullable();
			$table->smallInteger('screen_rows')->unsigned()->nullable();
			$table->smallInteger('screen_cols')->unsigned()->nullable();
			$table->string('color_back', 8)->nullable();
			$table->string('color_text', 8)->nullable();
			$table->smallInteger('group_type')->unsigned()->default(0);
			$table->primary(['group_type','group_screen_key'], 'index_group_screen');
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
		Schema::drop('group_screen');
	}
}
