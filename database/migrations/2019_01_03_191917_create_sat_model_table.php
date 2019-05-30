<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSatModelTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
                if ( !Schema::hasTable('sat_model') ) {

                    Schema::create('sat_model', function(Blueprint $table)
                    {
                            $table->string('sat_manufacturer', 40);
                            $table->string('sat_model', 40)->index('index_sat_model');
                            $table->primary(['sat_manufacturer','sat_model'], 'index_sat_model');
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
		Schema::drop('sat_model');
	}
}
