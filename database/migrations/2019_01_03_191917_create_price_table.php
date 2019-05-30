<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePriceTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        if ( !Schema::hasTable('price') ) {
		Schema::create('price', function(Blueprint $table)

		{
			$table->integer('price_key')->unsigned()->primary();
			$table->string('name', 50)->nullable();
			$table->dateTime('last_change_time')->nullable();
			$table->boolean('adm_price')->default(0);
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
		Schema::drop('price');
	}
}
