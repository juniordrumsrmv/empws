<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFiscalTaxStatusTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        if ( !Schema::hasTable('fiscal_tax_status') ) {
		Schema::create('fiscal_tax_status', function(Blueprint $table)

		{
			$table->bigInteger('store_key')->unsigned();
			$table->smallInteger('pos_number')->unsigned();
			$table->integer('ticket_number')->unsigned();
			$table->dateTime('start_time');
			$table->char('pos_id', 4);
			$table->decimal('amount', 15, 3);
			$table->decimal('tax_amount', 15, 3);
			$table->decimal('tax_percent', 6, 3);
			$table->smallInteger('ecf_number')->unsigned();
			$table->primary(['store_key','pos_number','ticket_number','start_time','pos_id'], 'index_fiscal_tax_status');
			$table->unique(['store_key','ecf_number','ticket_number','start_time','pos_id'], 'index_ecf_taxsts');
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
		Schema::drop('fiscal_tax_status');
	}
}
