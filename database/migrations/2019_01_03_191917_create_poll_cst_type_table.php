<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePollCstTypeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        if ( !Schema::hasTable('poll_cst_type') ) {
		Schema::create('poll_cst_type', function(Blueprint $table)

		{
			$table->smallInteger('cst_type_key')->unsigned();
			$table->bigInteger('poll_key')->unsigned();
			$table->primary(['cst_type_key','poll_key'], 'index_poll_cst_type');
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
		Schema::drop('poll_cst_type');
	}
}
