<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCashierDocumentTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        if ( !Schema::hasTable('cashier_document') ) {
		Schema::create('cashier_document', function(Blueprint $table)

		{
			$table->bigInteger('cashier_document_key', true)->unsigned();
			$table->boolean('picked')->nullable();
			$table->boolean('swap_type')->nullable();
			$table->integer('pickup_ticket_number')->unsigned()->nullable();
			$table->integer('ticket_number')->unsigned()->nullable();
			$table->bigInteger('cpu_clock')->unsigned();
			$table->bigInteger('agent_key')->unsigned();
			$table->char('agent_id', 10)->nullable();
			$table->smallInteger('media_key')->unsigned()->nullable();
			$table->boolean('is_check')->nullable();
			$table->boolean('negative')->nullable();
			$table->boolean('undone')->nullable();
			$table->boolean('voided')->nullable();
			$table->decimal('amount', 15, 3)->nullable();
			$table->decimal('amount_entered', 15, 3)->nullable();
			$table->decimal('unit_value', 15, 3)->nullable();
			$table->smallInteger('document_type')->unsigned()->nullable();
			$table->string('approval', 16)->nullable();
			$table->string('day', 40)->nullable();
			$table->string('document_tag', 40)->nullable();
			$table->string('description', 40)->nullable();
			$table->smallInteger('extra_media_key')->unsigned()->nullable();
			$table->smallInteger('document_status')->unsigned()->nullable();
			$table->integer('transaction_type')->unsigned();
			$table->bigInteger('trn_number')->unsigned();
			$table->bigInteger('store_key')->unsigned();
			$table->smallInteger('pos_number')->unsigned();
			$table->index(['agent_key','store_key','pos_number','trn_number','cpu_clock'], 'index_cashier_document_1');
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
		Schema::drop('cashier_document');
	}
}
