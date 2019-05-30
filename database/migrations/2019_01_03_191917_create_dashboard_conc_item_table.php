<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDashboardConcItemTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        if ( !Schema::hasTable('dashboard_conc_item') ) {
		Schema::create('dashboard_conc_item', function(Blueprint $table)

		{
			$table->bigInteger('store_key')->unsigned();
			$table->date('fiscal_date');
			$table->bigInteger('nseriesat')->unsigned();
			$table->string('nrec', 128)->nullable();
			$table->string('chave', 64);
			$table->bigInteger('ncupom')->unsigned();
			$table->string('situacao', 256)->nullable();
			$table->string('cfeerros', 256)->nullable();
			$table->bigInteger('conciliare')->unsigned()->nullable();
			$table->primary(['nseriesat','chave','ncupom'], 'index_dashboard_conc_item');
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
		Schema::drop('dashboard_conc_item');
	}
}
