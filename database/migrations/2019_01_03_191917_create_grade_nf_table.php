<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGradeNfTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        if ( !Schema::hasTable('grade_nf') ) {
		Schema::create('grade_nf', function(Blueprint $table)

		{
			$table->smallInteger('cst_type_key')->unsigned();
			$table->smallInteger('invoice_type_key')->unsigned();
			$table->char('department_id', 12);
			$table->char('pos_id', 4);
			$table->char('cfop', 8)->nullable();
			$table->primary(['cst_type_key','invoice_type_key','department_id','pos_id'], 'index_grade_nf');
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
		Schema::drop('grade_nf');
	}
}
