<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTicketRemarksTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
                if ( !Schema::hasTable('ticket_remarks') ) {

                    Schema::create('ticket_remarks', function(Blueprint $table)
                    {
                            $table->bigInteger('store_key')->unsigned();
                            $table->smallInteger('pos_number')->unsigned();
                            $table->integer('ticket_number')->unsigned();
                            $table->dateTime('start_time');
                            $table->dateTime('remark_time');
                            $table->smallInteger('ecf_number')->unsigned();
                            $table->bigInteger('trn_number')->unsigned()->nullable();
                            $table->decimal('initial_GT', 19, 3)->nullable();
                            $table->decimal('final_GT', 19, 3)->nullable();
                            $table->decimal('item_total_GT', 12, 3)->nullable();
                            $table->decimal('amount_due', 12, 3)->nullable();
                            $table->decimal('media_total', 12, 3)->nullable();
                            $table->decimal('change_total', 12, 3)->nullable();
                            $table->decimal('discount_total', 12, 3)->nullable();
                            $table->decimal('item_total', 12, 3)->nullable();
                            $table->binary('remark')->nullable();
                            $table->primary(['store_key','pos_number','ticket_number','start_time','remark_time'], 'index_ticket_remarks');
                            $table->unique(['start_time','store_key','pos_number','ticket_number','remark_time'], 'ticket_remarks_start_time');
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
		Schema::drop('ticket_remarks');
	}
}
