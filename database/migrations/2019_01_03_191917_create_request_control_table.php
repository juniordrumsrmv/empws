<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRequestControlTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
                if ( !Schema::hasTable('request_control') ) {

                    Schema::create('request_control', function(Blueprint $table)
                    {
                            $table->bigInteger('store_key')->unsigned();
                            $table->smallInteger('pos_number')->unsigned();
                            $table->integer('ticket_number')->unsigned();
                            $table->dateTime('start_time');
                            $table->date('fiscal_date')->nullable();
                            $table->bigInteger('trn_number')->unsigned()->nullable();
                            $table->date('request_date');
                            $table->bigInteger('request_store_key')->unsigned();
                            $table->smallInteger('request_pos_number')->unsigned();
                            $table->integer('request_ticket_number')->unsigned()->nullable();
                            $table->bigInteger('request_trn_number')->unsigned();
                            $table->primary(['store_key','pos_number','ticket_number','start_time','request_store_key','request_pos_number','request_trn_number','request_date'], 'index_request_control');
                            $table->index(['request_store_key','request_pos_number','request_trn_number','request_date'], 'index_request');
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
		Schema::drop('request_control');
	}
}
