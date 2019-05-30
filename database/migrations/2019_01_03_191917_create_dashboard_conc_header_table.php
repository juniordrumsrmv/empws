<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDashboardConcHeaderTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        if ( !Schema::hasTable('dashboard_conc_header') ) {
		Schema::create('dashboard_conc_header', function(Blueprint $table)

		{
			$table->bigInteger('store_key')->unsigned();
			$table->date('fiscal_date');
			$table->bigInteger('nseriesat')->unsigned();
			$table->string('nrec', 128);
			$table->dateTime('dhenviolote')->nullable();
			$table->dateTime('dhprocessamento')->nullable();
			$table->string('tipoLote', 32)->nullable();
			$table->string('origem', 256)->nullable();
			$table->bigInteger('qtdecupoms')->unsigned()->nullable();
			$table->string('situacaolote', 64)->nullable();
			$table->dateTime('last_sent_time')->nullable();
			$table->primary(['nseriesat','nrec'], 'index_dashboard_conc_header');
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
		Schema::drop('dashboard_conc_header');
	}
}
