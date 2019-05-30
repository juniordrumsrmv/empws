<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEcfModelTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        if ( !Schema::hasTable('ecf_model') ) {
		Schema::create('ecf_model', function(Blueprint $table)

		{
			$table->string('ecf_manufacturer', 40);
			$table->string('ecf_model', 40)->index('index_ecf_model');
			$table->string('code_m', 2);
			$table->primary(['ecf_manufacturer','ecf_model'], 'index_ecf_model');
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
		Schema::drop('ecf_model');
	}
}
