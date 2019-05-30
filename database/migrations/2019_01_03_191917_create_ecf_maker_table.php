<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEcfMakerTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        if ( !Schema::hasTable('ecf_maker') ) {
		Schema::create('ecf_maker', function(Blueprint $table)

		{
			$table->string('ecf_manufacturer', 40)->primary();
			$table->string('code_ff', 4);
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
		Schema::drop('ecf_maker');
	}
}
