<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateReturnConfigTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
                if ( !Schema::hasTable('return_config') ) {

                    Schema::create('return_config', function(Blueprint $table)
                    {
                            $table->smallInteger('return_type')->unsigned()->primary();
                            $table->smallInteger('record_return_control')->unsigned()->nullable();
                            $table->smallInteger('record_sale')->unsigned()->nullable();
                            $table->smallInteger('issue_customer_print')->unsigned()->nullable();
                            $table->smallInteger('show_amount_print')->unsigned()->nullable();
                            $table->dateTime('last_change_time')->nullable();
                            $table->smallInteger('return_status')->unsigned()->nullable();
                            $table->smallInteger('return_barcode')->unsigned()->nullable();
                            $table->smallInteger('return_layout')->unsigned()->nullable();
                            $table->smallInteger('hide_code_print')->unsigned()->nullable();
                            $table->bigInteger('valid_days')->unsigned()->nullable();
                            $table->smallInteger('show_item_print')->unsigned()->nullable();
                            $table->smallInteger('enable_add_report_print')->unsigned()->nullable();
                            $table->smallInteger('orig_store_only')->unsigned()->nullable();
                            $table->text('header_text')->nullable();
                            $table->text('footer_text')->nullable();
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
		Schema::drop('return_config');
	}
}
