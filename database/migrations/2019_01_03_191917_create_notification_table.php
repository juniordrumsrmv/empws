<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateNotificationTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        if ( !Schema::hasTable('notification') ) {
		Schema::create('notification', function(Blueprint $table)

		{
			$table->bigInteger('notification_key', true)->unsigned();
			$table->bigInteger('store_key')->unsigned()->nullable();
			$table->smallInteger('pos_number')->unsigned()->nullable();
			$table->dateTime('notification_time')->nullable();
			$table->smallInteger('notification_type')->nullable();
			$table->smallInteger('transaction_type')->nullable();
			$table->smallInteger('status')->nullable();
			$table->bigInteger('units')->unsigned()->nullable();
			$table->string('process_id')->nullable();
			$table->integer('ticket_number')->unsigned()->nullable();
			$table->integer('trn_number')->unsigned()->nullable();
			$table->bigInteger('cashier_key')->unsigned()->nullable();
			$table->bigInteger('authorizer_key')->unsigned()->nullable();
			$table->binary('notification_data', 65535)->nullable();
			$table->index(['store_key','pos_number','notification_time'], 'index_notification');
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
		Schema::drop('notification');
	}
}
