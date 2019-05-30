<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCashierDocumentDataTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        if ( !Schema::hasTable('cashier_document_data') ) {
		Schema::create('cashier_document_data', function(Blueprint $table)

		{
			$table->bigInteger('cashier_document_key')->unsigned();
			$table->smallInteger('data_id')->unsigned();
			$table->string('data_value', 80)->nullable();
			$table->string('data_extra', 80)->nullable();
			$table->primary(['cashier_document_key','data_id'], 'index_cashier_document_data');
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
		Schema::drop('cashier_document_data');
	}
}
