<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDashboardNotificationTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        if ( !Schema::hasTable('dashboard_notification') ) {
		Schema::create('dashboard_notification', function(Blueprint $table)

		{
            $table->engine = 'MyISAM';
			$table->bigInteger('notification_key', true)->unsigned();
			$table->bigInteger('store_key', false, false);
			$table->smallInteger('pos_number', false, false);
			$table->dateTime('notification_time');
			$table->smallInteger('notification_type')->nullable();
			$table->smallInteger('transaction_type')->nullable();
			$table->smallInteger('status')->nullable();
			$table->bigInteger('units')->unsigned()->nullable();
			$table->string('process_id')->nullable();
			$table->integer('ticket_number', false, false);
			$table->integer('trn_number')->unsigned()->nullable();
			$table->bigInteger('cashier_key')->unsigned()->nullable();
			$table->bigInteger('authorizer_key')->unsigned()->nullable();
			$table->binary('notification_data', 65535)->nullable();
			$table->unique(['notification_key','store_key','pos_number','ticket_number','notification_time'], 'index_dashboard_notification');
			$table->index(['store_key','pos_number','notification_time','process_id','status','transaction_type'], 'index_notification');
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
		Schema::drop('dashboard_notification');
	}
}
