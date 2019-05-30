<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGradeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        if ( !Schema::hasTable('grade') ) {
		Schema::create('grade', function(Blueprint $table)

		{
			$table->smallInteger('cst_type_key')->unsigned();
			$table->char('entity_id', 10);
			$table->char('department_id', 12);
			$table->char('pos_id', 4);
			$table->char('cfop', 8)->nullable();
			$table->primary(['cst_type_key','entity_id','department_id','pos_id'], 'index_grade');
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
		Schema::drop('grade');
	}
}
