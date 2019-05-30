<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCellOperatorPrefixTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        if ( !Schema::hasTable('cell_operator_prefix') ) {
		Schema::create('cell_operator_prefix', function(Blueprint $table)

		{
			$table->smallInteger('operator_key');
			$table->string('operator_ddd', 2)->nullable();
			$table->string('operator_prefix', 4)->nullable();
			$table->unique(['operator_key','operator_ddd','operator_prefix'], 'index_prefix');
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
		Schema::drop('cell_operator_prefix');
	}
}
