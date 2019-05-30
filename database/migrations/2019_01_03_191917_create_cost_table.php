<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCostTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        if ( !Schema::hasTable('cost') ) {
		Schema::create('cost', function(Blueprint $table)

		{
			$table->bigInteger('plu_key')->unsigned();
			$table->dateTime('start');
			$table->decimal('cost', 15, 4)->nullable();
			$table->bigInteger('store_key')->unsigned();
			$table->primary(['store_key','plu_key','start']);
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
		Schema::drop('cost');
	}
}
