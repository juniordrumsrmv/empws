<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRequestControlItemTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
                if ( !Schema::hasTable('request_control_item') ) {

                    Schema::create('request_control_item', function(Blueprint $table)
                    {
                            $table->bigInteger('store_key')->unsigned();
                            $table->smallInteger('pos_number')->unsigned();
                            $table->integer('ticket_number')->unsigned();
                            $table->dateTime('start_time');
                            $table->smallInteger('sequence')->unsigned();
                            $table->bigInteger('plu_id')->unsigned()->nullable();
                            $table->decimal('quantity', 15, 3)->nullable();
                            $table->decimal('unit_price', 15, 3)->nullable();
                            $table->decimal('amount', 15, 3)->nullable();
                            $table->date('fiscal_date')->nullable();
                            $table->bigInteger('trn_number')->unsigned()->nullable();
                            $table->boolean('event_type')->nullable();
                            $table->bigInteger('authorizer_key')->unsigned()->nullable();
                            $table->date('request_date')->nullable();
                            $table->bigInteger('request_store_key')->unsigned()->nullable();
                            $table->smallInteger('request_pos_number')->unsigned()->nullable();
                            $table->integer('request_ticket_number')->unsigned()->nullable();
                            $table->bigInteger('request_trn_number')->unsigned()->nullable();
                            $table->bigInteger('request_plu_id')->unsigned()->nullable();
                            $table->decimal('request_quantity', 15, 3)->nullable();
                            $table->decimal('request_unit_price', 15, 3)->nullable();
                            $table->decimal('request_amount', 15, 3)->nullable();
                            $table->primary(['store_key','pos_number','ticket_number','start_time','sequence'], 'index_request_control_item');
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
		Schema::drop('request_control_item');
	}
}
