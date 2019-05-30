<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSngpcInvoiceTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
                if ( !Schema::hasTable('sngpc_invoice') ) {

                    Schema::create('sngpc_invoice', function(Blueprint $table)
                    {
                            $table->bigInteger('sngpc_key')->unsigned();
                            $table->integer('invoice_number')->unsigned();
                            $table->boolean('invoice_operation');
                            $table->date('fiscal_date');
                            $table->bigInteger('store_origin')->unsigned();
                            $table->bigInteger('store_destiny')->unsigned()->nullable();
                            $table->dateTime('last_change_time')->nullable();
                            $table->primary(['sngpc_key','invoice_number','invoice_operation','fiscal_date'], 'index_sngpc_invoice');
                            $table->index(['sngpc_key','invoice_number','invoice_operation','fiscal_date'], 'sngpc_invoice_index_1');
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
		Schema::drop('sngpc_invoice');
	}
}
