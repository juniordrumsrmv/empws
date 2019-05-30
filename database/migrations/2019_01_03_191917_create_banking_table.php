<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBankingTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        if ( !Schema::hasTable('banking') ) {
		Schema::create('banking', function(Blueprint $table)

		{
			$table->bigInteger('store_key')->unsigned();
			$table->smallInteger('pos_number')->unsigned();
			$table->integer('ticket_number')->unsigned();
			$table->dateTime('start_time');
			$table->smallInteger('transaction_type')->unsigned()->nullable();
			$table->bigInteger('cashier_key')->unsigned()->nullable();
			$table->bigInteger('authorizer_key')->unsigned()->nullable();
			$table->boolean('status')->nullable();
			$table->smallInteger('location')->unsigned()->nullable();
			$table->boolean('context')->nullable();
			$table->integer('transaction_number')->unsigned();
			$table->smallInteger('ecf_number')->unsigned();
			$table->date('fiscal_date');
			$table->dateTime('received_time')->nullable();
			$table->dateTime('last_change_time')->nullable();
			$table->primary(['store_key','pos_number','ticket_number','start_time'], 'index_banking');
			$table->index(['store_key','pos_number','transaction_type','start_time','cashier_key'], 'banking_cashier_key');
			$table->index(['store_key','transaction_type','start_time','pos_number','ticket_number'], 'index_banking_2');
			$table->index(['store_key','pos_number','transaction_number','start_time'], 'index_banking_3');
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
		Schema::drop('banking');
	}
}
