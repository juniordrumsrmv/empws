<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBankingMediaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        if ( !Schema::hasTable('banking_media') ) {
		Schema::create('banking_media', function(Blueprint $table)

		{
			$table->bigInteger('store_key')->unsigned();
			$table->smallInteger('pos_number')->unsigned();
			$table->integer('ticket_number')->unsigned();
			$table->dateTime('start_time');
			$table->smallInteger('sequence')->unsigned();
			$table->smallInteger('media_id')->unsigned();
			$table->decimal('amount', 15, 3)->nullable();
			$table->boolean('document_control')->nullable();
			$table->integer('transaction_number')->unsigned();
			$table->primary(['store_key','pos_number','ticket_number','start_time','sequence'], 'index_banking_media');
			$table->index(['store_key','pos_number','transaction_number','start_time','sequence'], 'index_banking_media_1');
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
		Schema::drop('banking_media');
	}
}
