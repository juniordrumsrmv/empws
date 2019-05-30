<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateInvoiceTypeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        if ( !Schema::hasTable('invoice_type') ) {
		Schema::create('invoice_type', function(Blueprint $table)

		{
			$table->smallInteger('invoice_type_key')->unsigned()->primary();
			$table->string('invoice_name', 30);
			$table->boolean('invoice_print')->nullable();
			$table->boolean('invoice_in_out')->nullable();
			$table->string('invoice_cfop', 10)->nullable();
			$table->string('invoice_cfop_inter', 10)->nullable();
			$table->string('invoice_cfop_st', 10)->nullable();
			$table->string('invoice_cfop_st_inter', 10)->nullable();
			$table->text('invoice_comment', 65535)->nullable();
			$table->text('invoice_message', 65535)->nullable();
			$table->dateTime('invoice_last_change_time')->nullable();
			$table->boolean('invoice_extra_type')->nullable();
			$table->boolean('invoice_receipt')->nullable();
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
		Schema::drop('invoice_type');
	}
}
