<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFiscalAccumOperTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        if ( !Schema::hasTable('fiscal_accum_oper') ) {
		Schema::create('fiscal_accum_oper', function(Blueprint $table)

		{
			$table->bigInteger('store_key')->unsigned();
			$table->smallInteger('ecf_number')->unsigned();
			$table->string('alternate_id', 10);
			$table->smallInteger('media_id')->unsigned();
			$table->date('fiscal_date');
			$table->decimal('quantity', 8, 0);
			$table->decimal('quantity_canc', 8, 0);
			$table->decimal('amount', 15, 3);
			$table->decimal('amount_canc', 15, 3);
			$table->decimal('quantity_pickup', 8, 0);
			$table->decimal('amount_pickup', 15, 3);
			$table->decimal('amount_loan', 15, 3);
			$table->primary(['store_key','ecf_number','fiscal_date','alternate_id','media_id'], 'index_fiscal_accum_oper');
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
		Schema::drop('fiscal_accum_oper');
	}
}
