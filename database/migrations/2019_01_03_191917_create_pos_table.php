<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        if ( !Schema::hasTable('pos') ) {
		Schema::create('pos', function(Blueprint $table)

		{
			$table->bigInteger('store_key')->unsigned();
			$table->smallInteger('pos_number')->unsigned();
			$table->boolean('pos_decimals');
			$table->string('pos_name', 30);
			$table->string('pos_serial', 20);
			$table->string('pos_version', 20);
			$table->string('pos_impress', 20);
			$table->string('pos_checkout', 20);
			$table->date('pos_date_inc');
			$table->date('pos_date_alt');
			$table->smallInteger('pos_status')->unsigned();
			$table->dateTime('pos_contact');
			$table->string('pos_model', 20);
			$table->string('pos_IP', 20)->nullable();
			$table->boolean('pos_system')->nullable();
			$table->string('pos_invoice_printer', 20)->nullable();
			$table->bigInteger('pos_last_plu_update')->unsigned()->nullable();
			$table->bigInteger('pos_last_customer_update')->unsigned()->nullable();
			$table->binary('pos_data', 65535)->nullable();
			$table->boolean('pos_transmit_type')->nullable();
			$table->dateTime('pos_last_plu_export_time')->nullable();
			$table->dateTime('pos_last_plu_update_time')->nullable();
			$table->dateTime('pos_last_customer_export_time')->nullable();
			$table->dateTime('pos_last_customer_update_time')->nullable();
			$table->string('pos_internal_ip', 20)->nullable();
			$table->smallInteger('pos_internal_port')->unsigned()->nullable();
			$table->boolean('pos_automatic_option')->nullable();
			$table->boolean('pos_rec_status')->nullable();
			$table->smallInteger('pos_type_key')->unsigned()->nullable();
			$table->boolean('pos_emergency_status')->nullable();
			$table->smallInteger('pos_plu_type')->unsigned()->nullable();
			$table->dateTime('info_time')->nullable();
			$table->string('os_name')->nullable();
			$table->string('os_version')->nullable();
			$table->boolean('os_code')->nullable();
			$table->boolean('cpu_count')->nullable();
			$table->bigInteger('memory_total')->unsigned()->nullable();
			$table->bigInteger('swap_total')->unsigned()->nullable();
			$table->bigInteger('swap_free')->unsigned()->nullable();
			$table->dateTime('last_user_update_time')->nullable();
			$table->bigInteger('last_user_update')->unsigned()->nullable();
			$table->boolean('user_autosend')->nullable();
			$table->dateTime('last_user_autosend_check')->nullable();
			$table->boolean('user_autosend_changed')->nullable();
			$table->dateTime('last_user_autosend_time')->nullable();
			$table->dateTime('pos_nfce_time')->nullable();
			$table->smallInteger('pos_active')->unsigned();
			$table->dateTime('cert_expr_date')->nullable();
			$table->dateTime('pos_sat_time')->nullable();
			$table->primary(['store_key','pos_number'], 'index_pos');
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
		Schema::drop('pos');
	}
}
