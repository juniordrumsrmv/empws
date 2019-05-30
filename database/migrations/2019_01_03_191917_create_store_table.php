<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateStoreTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
                if ( !Schema::hasTable('store') ) {

                    Schema::create('store', function(Blueprint $table)
                    {
                            $table->bigInteger('store_key')->unsigned()->primary();
                            $table->string('store_id1', 25);
                            $table->string('store_id2', 20);
                            $table->string('store_id3', 15);
                            $table->string('store_name', 30);
                            $table->string('store_address', 50);
                            $table->string('store_neig', 20);
                            $table->string('store_city');
                            $table->string('store_state', 20);
                            $table->string('store_zip', 12);
                            $table->char('store_country_code', 10)->nullable();
                            $table->char('store_state_code', 10)->nullable();
                            $table->char('store_city_code', 16)->nullable();
                            $table->string('store_email', 50);
                            $table->string('store_phone1', 15);
                            $table->string('store_phone2', 15);
                            $table->date('store_date_inc');
                            $table->date('store_date_alt');
                            $table->bigInteger('store_nf_number')->unsigned()->nullable();
                            $table->string('store_nf_serial', 3)->nullable();
                            $table->integer('store_map_number')->unsigned()->nullable();
                            $table->boolean('store_map_type')->nullable();
                            $table->smallInteger('store_time_zone')->nullable();
                            $table->dateTime('store_last_customer_export_time')->nullable();
                            $table->dateTime('store_last_customer_update_time')->nullable();
                            $table->bigInteger('store_last_customer_update')->unsigned()->nullable();
                            $table->bigInteger('store_last_customer_export_update')->unsigned()->nullable();
                            $table->dateTime('store_last_plu_export_time')->nullable();
                            $table->dateTime('store_last_plu_update_time')->nullable();
                            $table->bigInteger('store_last_plu_update')->unsigned()->nullable();
                            $table->bigInteger('store_last_plu_export_update')->unsigned()->nullable();
                            $table->string('store_razao', 50);
                            $table->smallInteger('store_num')->unsigned();
                            $table->string('store_comple', 20);
                            $table->string('store_contact', 20);
                            $table->integer('store_tax_type_key')->unsigned()->nullable();
                            $table->dateTime('store_last_plu_autosend_check')->nullable();
                            $table->boolean('store_plu_autosend_changed')->nullable();
                            $table->dateTime('store_last_customer_autosend_check')->nullable();
                            $table->boolean('store_customer_autosend_changed')->nullable();
                            $table->integer('store_invoice_seq')->unsigned()->nullable();
                            $table->dateTime('store_last_verifier_export_time')->nullable();
                            $table->dateTime('store_last_verifier_update_time')->nullable();
                            $table->bigInteger('store_last_verifier_update')->unsigned()->nullable();
                            $table->bigInteger('store_last_verifier_export_update')->unsigned()->nullable();
                            $table->bigInteger('accountant_key')->unsigned()->default(1);
                            $table->smallInteger('tributary_system')->nullable()->default(0);
                            $table->dateTime('last_user_update_time')->nullable();
                            $table->bigInteger('last_user_update')->unsigned()->nullable();
                            $table->boolean('user_autosend')->nullable();
                            $table->dateTime('last_user_autosend_check')->nullable();
                            $table->boolean('user_autosend_changed')->nullable();
                            $table->dateTime('last_user_autosend_time')->nullable();
                            $table->integer('store_fiscal_country_code')->unsigned()->nullable();
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
		Schema::drop('store');
	}
}
