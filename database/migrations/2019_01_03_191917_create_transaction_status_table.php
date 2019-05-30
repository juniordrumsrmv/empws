<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTransactionStatusTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
                if ( !Schema::hasTable('transaction_status') ) {

                    Schema::create('transaction_status', function(Blueprint $table)
                    {
                            $table->bigInteger('trans_key', true)->unsigned();
                            $table->smallInteger('trans_status')->unsigned();
                            $table->smallInteger('trans_type')->unsigned();
                            $table->string('trans_object', 250)->nullable();
                            $table->bigInteger('trans_store')->unsigned();
                            $table->smallInteger('trans_pos_from')->unsigned();
                            $table->smallInteger('trans_pos_to')->unsigned();
                            $table->string('trans_IP', 36)->nullable();
                            $table->string('trans_user', 10)->nullable();
                            $table->dateTime('trans_time_start')->nullable()->index('index_transaction_status_start');
                            $table->dateTime('trans_time_update')->nullable();
                            $table->dateTime('trans_time_finish')->nullable();
                            $table->bigInteger('trans_total_units')->unsigned()->nullable();
                            $table->bigInteger('trans_current_units')->unsigned()->nullable();
                            $table->string('trans_data')->nullable();
                            $table->string('trans_report')->nullable();
                            $table->index(['trans_type','trans_time_start'], 'index_transaction_status_type');
                            $table->index(['trans_user','trans_time_start'], 'index_transaction_status_user');
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
		Schema::drop('transaction_status');
	}
}
