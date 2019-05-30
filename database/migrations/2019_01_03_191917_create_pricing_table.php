<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePricingTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        if ( !Schema::hasTable('pricing') ) {
		Schema::create('pricing', function(Blueprint $table)

		{
			$table->bigInteger('plu_key')->unsigned();
			$table->dateTime('start');
			$table->decimal('price', 15, 3)->nullable();
			$table->integer('type_price')->unsigned();
			$table->bigInteger('store_key')->unsigned();
			$table->decimal('quantity', 8, 3)->nullable();
			$table->boolean('promotion')->nullable();
			$table->bigInteger('code_promotion')->unsigned()->nullable();
			$table->decimal('points', 15, 3)->nullable();
			$table->decimal('rate', 9, 3)->nullable();
			$table->boolean('sequence')->nullable();
			$table->primary(['store_key','plu_key','start','type_price'], 'index_pricing');
			$table->index(['plu_key','type_price','start'], 'pricing_1');
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
		Schema::drop('pricing');
	}
}
