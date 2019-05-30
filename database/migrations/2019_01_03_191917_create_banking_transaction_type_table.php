<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBankingTransactionTypeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        if ( !Schema::hasTable('banking_transaction_type') ) {
		Schema::create('banking_transaction_type', function(Blueprint $table)

		{
			$table->smallInteger('transaction_type_key')->unsigned()->primary();
			$table->string('description', 128)->nullable();
			$table->boolean('type')->nullable();
			$table->text('observation', 65535)->nullable();
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
		Schema::drop('banking_transaction_type');
	}
}
