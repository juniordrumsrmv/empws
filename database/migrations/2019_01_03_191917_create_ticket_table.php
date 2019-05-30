<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTicketTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
                if ( !Schema::hasTable('ticket') ) {

                    Schema::create('ticket', function(Blueprint $table)
                    {
                            $table->bigInteger('store_key')->unsigned();
                            $table->smallInteger('pos_number')->unsigned();
                            $table->integer('ticket_number')->unsigned();
                            $table->dateTime('start_time');
                            $table->boolean('ticket_type');
                            $table->smallInteger('ecf_number')->unsigned();
                            $table->bigInteger('trn_number')->unsigned()->nullable();
                            $table->date('fiscal_date')->nullable();
                            $table->binary('display')->nullable();
                            $table->integer('GNF')->unsigned()->nullable();
                            $table->integer('GRG')->unsigned()->nullable();
                            $table->integer('CDC')->unsigned()->nullable();
                            $table->integer('CCF')->unsigned()->nullable();
                            $table->primary(['store_key','pos_number','ticket_number','start_time'], 'index_ticket');
                            $table->index(['store_key','ecf_number','fiscal_date','ticket_number'], 'index_ticket_ecf');
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
		Schema::drop('ticket');
	}
}
