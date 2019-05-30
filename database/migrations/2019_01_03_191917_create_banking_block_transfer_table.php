<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBankingBlockTransferTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        if ( !Schema::hasTable('banking_block_transfer') ) {
		Schema::create('banking_block_transfer', function(Blueprint $table)

		{
			$table->bigInteger('block_transfer_key', true)->unsigned();
			$table->bigInteger('store_key')->unsigned();
			$table->date('reference_date');
			$table->dateTime('creation_time')->nullable();
			$table->dateTime('change_time')->nullable();
			$table->smallInteger('new_location_key')->unsigned()->nullable();
			$table->bigInteger('user_key')->unsigned()->nullable();
			$table->bigInteger('authorizer_key')->unsigned()->nullable();
			$table->smallInteger('transaction_type_key')->unsigned()->nullable();
			$table->string('description')->nullable();
			$table->boolean('status')->nullable();
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
		Schema::drop('banking_block_transfer');
	}
}
