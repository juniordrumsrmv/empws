<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFiscalSituationTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        if ( !Schema::hasTable('fiscal_situation') ) {
		Schema::create('fiscal_situation', function(Blueprint $table)

		{
			$table->smallInteger('fiscal_situation')->unsigned();
			$table->boolean('operation_type');
			$table->boolean('operation');
			$table->boolean('destine');
			$table->boolean('origin_region');
			$table->boolean('destine_region');
			$table->smallInteger('cfop')->unsigned();
			$table->decimal('extra_percent', 6, 4)->nullable();
			$table->decimal('red_calc_base', 6, 4)->nullable();
			$table->boolean('merchandise_origin');
			$table->unique(['merchandise_origin','fiscal_situation','operation_type','operation','destine','origin_region','destine_region','cfop'], 'index_fiscal');
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
		Schema::drop('fiscal_situation');
	}
}
