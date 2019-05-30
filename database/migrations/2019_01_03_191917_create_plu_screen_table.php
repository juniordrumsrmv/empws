<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePluScreenTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        if ( !Schema::hasTable('plu_screen') ) {
		Schema::create('plu_screen', function(Blueprint $table)

		{
			$table->bigInteger('plu_key')->unsigned();
			$table->bigInteger('group_screen_key')->unsigned();
			$table->bigInteger('store_key')->unsigned();
			$table->string('screen_description', 80)->nullable();
			$table->smallInteger('screen_position')->unsigned()->nullable();
			$table->smallInteger('group_type')->unsigned()->default(0);
			$table->boolean('status')->nullable();
			$table->smallInteger('store_group_key')->unsigned()->default(0);
			$table->primary(['group_type','plu_key','group_screen_key','store_key','store_group_key'], 'index_plu_screen');
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
		Schema::drop('plu_screen');
	}
}
