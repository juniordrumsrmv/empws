<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateExtraTicketTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        if ( !Schema::hasTable('extra_ticket') ) {
		Schema::create('extra_ticket', function(Blueprint $table)

		{
			$table->bigInteger('store_key')->unsigned();
			$table->smallInteger('pos_number')->unsigned();
			$table->integer('ticket_number')->unsigned();
			$table->dateTime('start_time');
			$table->boolean('ticket_type');
			$table->smallInteger('ecf_number')->unsigned();
			$table->bigInteger('trn_number')->unsigned();
			$table->date('fiscal_date')->nullable();
			$table->binary('data', 65535)->nullable();
			$table->primary(['store_key','pos_number','ticket_number','trn_number','start_time'], 'index_extra_ticket');
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
		Schema::drop('extra_ticket');
	}
}
