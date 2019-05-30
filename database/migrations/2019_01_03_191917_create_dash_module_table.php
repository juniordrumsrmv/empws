<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDashModuleTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        if ( !Schema::hasTable('dash_module') ) {
		Schema::create('dash_module', function(Blueprint $table)

		{
			$table->string('name', 30);
			$table->integer('position')->primary();
			$table->string('label', 30);
			$table->integer('status')->default(0);
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
		Schema::drop('dash_module');
	}
}
