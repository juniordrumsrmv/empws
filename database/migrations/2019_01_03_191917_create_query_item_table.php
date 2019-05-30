<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateQueryItemTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        if ( !Schema::hasTable('query_item') ) {
		Schema::create('query_item', function(Blueprint $table)

		{
			$table->bigInteger('store_key')->unsigned();
			$table->smallInteger('pos_number')->unsigned();
			$table->bigInteger('trn_number')->unsigned();
			$table->dateTime('start_time');
			$table->smallInteger('sequence')->unsigned();
			$table->integer('ticket_number')->unsigned();
			$table->smallInteger('item_sequence')->unsigned();
			$table->bigInteger('plu_id')->unsigned();
			$table->string('desc_plu', 48);
			$table->decimal('quantity', 15, 3);
			$table->decimal('unit_price', 15, 3);
			$table->decimal('amount', 15, 3);
			$table->bigInteger('cashier_key')->unsigned()->nullable();
			$table->bigInteger('authorizer_key')->unsigned()->nullable();
			$table->decimal('discount', 15, 3)->nullable();
			$table->decimal('increase', 15, 3)->nullable();
			$table->char('sku_id', 14)->nullable();
			$table->boolean('scanned')->nullable();
			$table->boolean('context')->nullable();
			$table->integer('type_price')->unsigned()->nullable();
			$table->smallInteger('verifier_number')->unsigned()->nullable();
			$table->primary(['store_key','pos_number','trn_number','start_time','sequence'], 'index_query_item');
			$table->index(['store_key','cashier_key','pos_number','start_time'], 'index_query_item_1');
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
		Schema::drop('query_item');
	}
}
