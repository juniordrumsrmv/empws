<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCstBlockDepartmentTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        if ( !Schema::hasTable('cst_block_department') ) {
		Schema::create('cst_block_department', function(Blueprint $table)

		{
			$table->smallInteger('cst_type_key')->unsigned();
			$table->smallInteger('department_key')->unsigned();
			$table->dateTime('last_change_time')->nullable();
			$table->primary(['cst_type_key','department_key'], 'index_cst_block_department');
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
		Schema::drop('cst_block_department');
	}
}
