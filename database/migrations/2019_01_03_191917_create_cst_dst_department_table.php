<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCstDstDepartmentTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        if ( !Schema::hasTable('cst_dst_department') ) {
		Schema::create('cst_dst_department', function(Blueprint $table)

		{
			$table->smallInteger('cst_type_key')->unsigned();
			$table->smallInteger('department_key')->unsigned();
			$table->decimal('discount', 15, 3);
			$table->dateTime('last_change_time')->nullable();
			$table->primary(['cst_type_key','department_key'], 'index_cst_dst_department');
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
		Schema::drop('cst_dst_department');
	}
}
