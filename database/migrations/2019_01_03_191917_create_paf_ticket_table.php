<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePafTicketTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        if ( !Schema::hasTable('paf_ticket') ) {
		Schema::create('paf_ticket', function(Blueprint $table)

		{
			$table->bigInteger('store_key')->unsigned();
			$table->smallInteger('pos_number')->unsigned();
			$table->integer('ticket_number')->unsigned();
			$table->dateTime('start_time');
			$table->char('paf_ticket_type', 2)->nullable();
			$table->smallInteger('ecf_number')->unsigned();
			$table->bigInteger('trn_number')->unsigned()->nullable();
			$table->date('fiscal_date')->nullable();
			$table->integer('GNF')->unsigned()->nullable();
			$table->integer('GRG')->unsigned()->nullable();
			$table->integer('CDC')->unsigned()->nullable();
			$table->integer('CCF')->unsigned()->nullable();
			$table->smallInteger('trn_status')->unsigned()->nullable();
			$table->primary(['store_key','pos_number','ticket_number','start_time'], 'index_paf_ticket');
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
		Schema::drop('paf_ticket');
	}
}
