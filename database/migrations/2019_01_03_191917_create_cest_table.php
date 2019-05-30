<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCestTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        if ( !Schema::hasTable('cest') ) {
		Schema::create('cest', function(Blueprint $table)

		{
			$table->string('cest_code', 12)->primary();
			$table->string('cest_description', 250);
			$table->string('segment', 50)->nullable();
			$table->string('item', 10)->nullable();
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
		Schema::drop('cest');
	}
}
