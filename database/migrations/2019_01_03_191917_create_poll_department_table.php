<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePollDepartmentTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        if ( !Schema::hasTable('poll_department') ) {
		Schema::create('poll_department', function(Blueprint $table)

		{
			$table->smallInteger('department_key')->unsigned();
			$table->bigInteger('poll_key')->unsigned();
			$table->primary(['department_key','poll_key'], 'index_poll_department');
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
		Schema::drop('poll_department');
	}
}
