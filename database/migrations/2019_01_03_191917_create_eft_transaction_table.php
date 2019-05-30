<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEftTransactionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        if ( !Schema::hasTable('eft_transaction') ) {
		Schema::create('eft_transaction', function(Blueprint $table)

		{
			$table->bigInteger('eft_trans_key', true)->unsigned();
			$table->bigInteger('eft_trans_nsu')->unsigned()->nullable();
			$table->char('eft_trans_family', 10);
			$table->bigInteger('eft_trans_store')->unsigned();
			$table->smallInteger('eft_trans_pos')->unsigned();
			$table->smallInteger('eft_trans_type')->unsigned()->nullable();
			$table->smallInteger('eft_trans_status')->unsigned();
			$table->dateTime('eft_trans_start_time')->nullable();
			$table->dateTime('eft_trans_finish_time')->nullable();
			$table->bigInteger('eft_trans_server_nsu')->unsigned()->nullable();
			$table->bigInteger('eft_trans_host_nsu')->unsigned()->nullable();
			$table->binary('eft_trans_message', 65535)->nullable();
			$table->binary('eft_trans_server_message', 65535)->nullable();
			$table->binary('eft_trans_ack_message', 65535)->nullable();
			$table->string('eft_trans_document')->nullable();
			$table->string('eft_trans_customer_id')->nullable();
			$table->bigInteger('eft_trans_customer_key')->unsigned()->nullable();
			$table->smallInteger('eft_trans_media_id')->nullable();
			$table->decimal('eft_trans_amount', 15, 3)->nullable();
			$table->bigInteger('eft_trans_cashier_key')->unsigned()->nullable();
			$table->bigInteger('eft_trans_authorizer_key')->unsigned()->nullable();
			$table->string('eft_trans_extra_ticket')->nullable();
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
		Schema::drop('eft_transaction');
	}
}
