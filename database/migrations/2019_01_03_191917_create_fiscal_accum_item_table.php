<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFiscalAccumItemTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        if ( !Schema::hasTable('fiscal_accum_item') ) {
		Schema::create('fiscal_accum_item', function(Blueprint $table)

		{
			$table->bigInteger('store_key')->unsigned();
			$table->smallInteger('ecf_number')->unsigned();
			$table->date('fiscal_date');
			$table->bigInteger('plu_id')->unsigned();
			$table->decimal('quantity', 15, 3);
			$table->decimal('quantity_canc', 15, 3);
			$table->decimal('amount', 15, 3);
			$table->decimal('amount_canc', 15, 3);
			$table->char('pos_id', 4);
			$table->decimal('tax_percent', 6, 3);
			$table->boolean('pis_cofins')->nullable();
			$table->unique(['store_key','fiscal_date','ecf_number','plu_id'], 'index_accum_item');
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
		Schema::drop('fiscal_accum_item');
	}
}
