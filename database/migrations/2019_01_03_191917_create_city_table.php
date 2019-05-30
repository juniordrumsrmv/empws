<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCityTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        if ( !Schema::hasTable('city') ) {
		Schema::create('city', function(Blueprint $table)

		{
			$table->char('country_code', 10);
			$table->char('state_code', 10);
			$table->char('city_code', 16);
			$table->string('city_name')->nullable();
			$table->string('city_name_sound')->nullable()->index('index_city_name_sound');
			$table->primary(['country_code','city_code'], 'index_city');
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
		Schema::drop('city');
	}
}
