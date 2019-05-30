<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCounterAdderTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        if ( !Schema::hasTable('counter_adder') ) {
		Schema::create('counter_adder', function(Blueprint $table)

		{
			$table->bigInteger('store_key')->unsigned();
			$table->smallInteger('pos_number')->unsigned();
			$table->date('counter_date');
			$table->date('counter_fiscal_date');
			$table->smallInteger('counter_type')->unsigned();
			$table->decimal('amount', 15, 3)->nullable();
			$table->primary(['store_key','pos_number','counter_date','counter_type'], 'index_counter_adder');
			$table->index(['store_key','pos_number','counter_fiscal_date','counter_type'], 'counter_1');
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
		Schema::drop('counter_adder');
	}
}
