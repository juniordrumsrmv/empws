<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCfopTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        if ( !Schema::hasTable('cfop') ) {
		Schema::create('cfop', function(Blueprint $table)

		{
			$table->integer('cfop_from')->unsigned()->primary();
			$table->integer('cfop_to')->unsigned();
			$table->string('cfop_desc', 50)->nullable();
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
		Schema::drop('cfop');
	}
}
