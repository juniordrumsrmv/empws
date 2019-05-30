<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBacenCountryTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        if ( !Schema::hasTable('bacen_country') ) {
		Schema::create('bacen_country', function(Blueprint $table)

		{
			$table->integer('country_id')->unsigned()->primary();
			$table->string('country_name', 60);
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
		Schema::drop('bacen_country');
	}
}
