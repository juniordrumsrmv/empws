<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBankingUnitTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        if ( !Schema::hasTable('banking_unit') ) {
		Schema::create('banking_unit', function(Blueprint $table)

		{
			$table->bigInteger('banking_unit_key', true)->unsigned();
			$table->boolean('type')->nullable();
			$table->boolean('status')->nullable();
			$table->smallInteger('location_key')->unsigned()->nullable();
			$table->bigInteger('store_key')->unsigned()->nullable();
			$table->smallInteger('pos_number')->unsigned()->nullable();
			$table->integer('ticket_number')->unsigned()->nullable();
			$table->integer('pickup_ticket_number')->unsigned()->nullable();
			$table->bigInteger('customer_key')->unsigned()->nullable();
			$table->string('issuer_id', 20)->nullable();
			$table->dateTime('creation_time')->nullable();
			$table->smallInteger('media_id')->unsigned()->nullable();
			$table->boolean('left_in_drawer')->nullable();
			$table->boolean('is_check')->nullable();
			$table->decimal('amount_pos', 15, 3)->nullable();
			$table->decimal('amount_pos_entered', 15, 3)->nullable();
			$table->decimal('amount_declared', 15, 3)->nullable();
			$table->decimal('amount_verified', 15, 3)->nullable();
			$table->decimal('unit_value', 15, 3)->nullable();
			$table->string('bank', 15)->nullable();
			$table->string('branch', 15)->nullable();
			$table->string('account', 15)->nullable();
			$table->string('check_number', 15)->nullable();
			$table->string('cmc7', 64)->nullable();
			$table->string('card_number', 32)->nullable();
			$table->date('date_due')->nullable();
			$table->bigInteger('cashier_key')->unsigned()->nullable();
			$table->bigInteger('authorizer_key')->unsigned()->nullable();
			$table->bigInteger('verifier_key')->unsigned()->nullable();
			$table->smallInteger('extended_media_id')->unsigned()->nullable();
			$table->integer('pickup_transaction_number')->unsigned()->nullable();
			$table->index(['store_key','pos_number','pickup_ticket_number','status'], 'index_banking_1');
			$table->index(['media_id','location_key','amount_verified'], 'banking_unit_2');
			$table->index(['extended_media_id','location_key','amount_verified'], 'banking_unit_3');
			$table->index(['store_key','pos_number','pickup_transaction_number','status'], 'banking_unit_4');
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
		Schema::drop('banking_unit');
	}
}
