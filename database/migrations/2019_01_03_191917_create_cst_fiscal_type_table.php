<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCstFiscalTypeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        if ( !Schema::hasTable('cst_fiscal_type') ) {
		Schema::create('cst_fiscal_type', function(Blueprint $table)

		{
			$table->smallInteger('cst_fiscal_type_key')->unsigned()->primary();
			$table->string('cst_fiscal_type_name', 20)->nullable();
			$table->smallInteger('cst_fiscal_type_invoice')->nullable();
			$table->dateTime('cst_fiscal_type_last_change_time')->nullable();
			$table->integer('cst_fiscal_type_price')->unsigned()->nullable()->default(0);
			$table->boolean('cst_fiscal_tax_exception')->nullable()->default(0);
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
		Schema::drop('cst_fiscal_type');
	}
}
