<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDocumentTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        if ( !Schema::hasTable('document') ) {
		Schema::create('document', function(Blueprint $table)

		{
			$table->bigInteger('document_key')->unsigned()->primary();
			$table->smallInteger('document_type')->unsigned();
			$table->string('document_id');
			$table->bigInteger('store_key')->unsigned();
			$table->smallInteger('pos_number')->unsigned()->nullable();
			$table->integer('ticket_number')->unsigned()->nullable();
			$table->dateTime('start_time')->nullable();
			$table->integer('transaction_number')->unsigned()->nullable();
			$table->decimal('amount', 15, 3)->nullable();
			$table->index(['store_key','pos_number','transaction_number','start_time'], 'index_document_1');
			$table->index(['document_type','document_id'], 'index_document_id');
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
		Schema::drop('document');
	}
}
