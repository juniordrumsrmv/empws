<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAccumMakerTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
    if ( !Schema::hasTable('accum_maker') ) {

      Schema::create('accum_maker', function(Blueprint $table)
      {
        $table->bigInteger('store_key')->unsigned();
        $table->date('fiscal_date');
        $table->bigInteger('maker_key')->unsigned();
        $table->boolean('hour');
        $table->decimal('quantity', 15, 3);
        $table->decimal('quantity_canc', 15, 3);
        $table->decimal('amount', 15, 3);
        $table->decimal('amount_canc', 15, 3);
        $table->decimal('cost', 15, 4);
        $table->decimal('cost_canc', 15, 4);
        $table->decimal('margin', 15, 3);
        $table->decimal('return_quantity', 15, 3)->nullable();
        $table->decimal('return_amount', 15, 3)->nullable();
        $table->primary(['store_key','fiscal_date','maker_key','hour'], 'index_accum_maker');
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
		Schema::drop('accum_maker');
	}
}
