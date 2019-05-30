<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBankingTransferTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        if ( !Schema::hasTable('banking_transfer') ) {
		Schema::create('banking_transfer', function(Blueprint $table)

		{
			$table->bigInteger('transfer_key', true)->unsigned();
			$table->bigInteger('store_key')->unsigned();
			$table->date('reference_date');
			$table->smallInteger('from_location_key')->unsigned()->nullable();
			$table->smallInteger('to_location_key')->unsigned()->nullable();
			$table->bigInteger('block_transfer_key')->unsigned()->nullable();
			$table->bigInteger('banking_unit_key')->unsigned()->nullable();
			$table->dateTime('creation_time')->nullable();
			$table->bigInteger('user_key')->unsigned()->nullable();
			$table->bigInteger('authorizer_key')->unsigned()->nullable();
			$table->smallInteger('media_id')->unsigned()->nullable();
			$table->decimal('amount', 15, 3)->nullable();
			$table->smallInteger('transaction_type_key')->unsigned()->nullable();
			$table->string('description')->nullable();
			$table->smallInteger('extended_media_id')->unsigned()->nullable();
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
		Schema::drop('banking_transfer');
	}
}
