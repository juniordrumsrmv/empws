<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFiscalTaxMapTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        if ( !Schema::hasTable('fiscal_tax_map') ) {
		Schema::create('fiscal_tax_map', function(Blueprint $table)

		{
			$table->bigInteger('store_key')->unsigned();
			$table->date('fiscal_date');
			$table->smallInteger('pos_number')->unsigned();
			$table->integer('ticket_number')->unsigned();
			$table->char('pos_id', 4);
			$table->decimal('amount', 15, 3);
			$table->decimal('tax_amount', 15, 3);
			$table->decimal('tax_percent', 6, 3);
			$table->smallInteger('ecf_number')->unsigned();
			$table->primary(['store_key','fiscal_date','pos_number','ticket_number','pos_id'], 'index_fiscal_tax_map');
			$table->unique(['store_key','fiscal_date','ecf_number','ticket_number','pos_id'], 'index_ecf_taxmap');
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
		Schema::drop('fiscal_tax_map');
	}
}
