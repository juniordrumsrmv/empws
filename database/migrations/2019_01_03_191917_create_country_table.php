<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCountryTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        if ( !Schema::hasTable('country') ) {
		Schema::create('country', function(Blueprint $table)

		{
			$table->integer('country_code')->unsigned()->primary();
			$table->string('country_name', 80)->nullable()->index('index_country_name');
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
		Schema::drop('country');
	}
}
