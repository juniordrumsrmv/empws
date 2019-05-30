<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateParameterTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        if ( !Schema::hasTable('parameter') ) {
		Schema::create('parameter', function(Blueprint $table)

		{
			$table->bigInteger('store_key')->unsigned();
			$table->char('prm_id', 10);
			$table->string('prm_value')->nullable();
			$table->primary(['store_key','prm_id'], 'index_parameter');
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
		Schema::drop('parameter');
	}
}
