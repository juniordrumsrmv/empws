<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePricingStepTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        if ( !Schema::hasTable('pricing_step') ) {
		Schema::create('pricing_step', function(Blueprint $table)

		{
			$table->bigInteger('plu_key')->unsigned();
			$table->dateTime('start');
			$table->integer('type_price')->unsigned();
			$table->bigInteger('store_key')->unsigned();
			$table->smallInteger('step_number')->unsigned();
			$table->smallInteger('times')->unsigned()->nullable();
			$table->decimal('price', 15, 3)->nullable();
			$table->smallInteger('next_step')->unsigned()->nullable();
			$table->smallInteger('action_type')->unsigned();
			$table->primary(['store_key','plu_key','start','type_price','step_number','action_type'], 'index_pricing_step');
			$table->index(['plu_key','type_price','start'], 'pricing_step_1');
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
		Schema::drop('pricing_step');
	}
}
