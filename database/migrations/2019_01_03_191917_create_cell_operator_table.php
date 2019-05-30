<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCellOperatorTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        if ( !Schema::hasTable('cell_operator') ) {
		Schema::create('cell_operator', function(Blueprint $table)

		{
			$table->smallInteger('operator_key')->unsigned()->primary();
			$table->string('operator_name', 50)->nullable();
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
		Schema::drop('cell_operator');
	}
}
