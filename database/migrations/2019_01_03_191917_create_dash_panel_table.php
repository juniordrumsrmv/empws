<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDashPanelTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        if ( !Schema::hasTable('dash_panel') ) {
		Schema::create('dash_panel', function(Blueprint $table)

		{
			$table->string('name', 128);
			$table->integer('position');
			$table->string('module', 30);
			$table->string('config', 250)->nullable();
			$table->primary(['position','module'], 'index_dash_panel');
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
		Schema::drop('dash_panel');
	}
}
