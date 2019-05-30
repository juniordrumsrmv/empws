<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGlobalsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        if ( !Schema::hasTable('globals') ) {
		Schema::create('globals', function(Blueprint $table)

		{
			$table->smallInteger('database_version')->unsigned()->nullable();
			$table->dateTime('database_update_time')->nullable();
			$table->smallInteger('database_version_db2db')->unsigned()->nullable();
			$table->string('emporium_prefix')->nullable();
			$table->dateTime('last_plu_import_time')->nullable();
			$table->dateTime('last_plu_export_time')->nullable();
			$table->dateTime('last_customer_import_time')->nullable();
			$table->dateTime('last_customer_export_time')->nullable();
			$table->bigInteger('last_plu_update')->unsigned()->nullable();
			$table->bigInteger('last_plu_export_update')->unsigned()->nullable();
			$table->bigInteger('last_customer_update')->unsigned()->nullable();
			$table->bigInteger('last_customer_export_update')->unsigned()->nullable();
			$table->dateTime('last_plu_update_time')->nullable();
			$table->dateTime('last_customer_update_time')->nullable();
			$table->char('system_version', 12)->nullable();
			$table->boolean('plu_by_store')->nullable();
			$table->smallInteger('max_send_sessions')->unsigned()->nullable();
			$table->bigInteger('block_transmit_delay')->unsigned()->nullable();
			$table->bigInteger('block_transmit_bytes')->unsigned()->nullable();
			$table->smallInteger('backoffice')->unsigned()->nullable();
			$table->boolean('ignore_fiscal_date')->nullable();
			$table->boolean('plu_autosend')->nullable();
			$table->boolean('customer_autosend')->nullable();
			$table->dateTime('last_plu_autosend_check')->nullable();
			$table->boolean('plu_autosend_changed')->nullable();
			$table->dateTime('last_customer_autosend_check')->nullable();
			$table->boolean('customer_autosend_changed')->nullable();
			$table->bigInteger('last_verify_export_update')->unsigned()->nullable();
			$table->boolean('enable_transaction_mode')->nullable();
			$table->boolean('customer_by_store')->nullable();
			$table->dateTime('last_user_import_time')->nullable();
			$table->dateTime('last_user_export_time')->nullable();
			$table->bigInteger('last_user_update')->unsigned()->nullable();
			$table->bigInteger('last_user_export_update')->unsigned()->nullable();
			$table->dateTime('last_user_update_time')->nullable();
			$table->boolean('user_autosend')->nullable();
			$table->dateTime('last_user_autosend_check')->nullable();
			$table->boolean('user_autosend_changed')->nullable();
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
		Schema::drop('globals');
	}
}
