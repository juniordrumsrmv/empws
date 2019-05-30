<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAccumMediaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
    if ( !Schema::hasTable('accum_media') ) {

      Schema::create('accum_media', function(Blueprint $table)
      {
        $table->bigInteger('store_key')->unsigned();
        $table->smallInteger('pos_number')->unsigned();
        $table->smallInteger('media_id')->unsigned();
        $table->date('fiscal_date');
        $table->decimal('quantity', 8, 0);
        $table->decimal('quantity_canc', 8, 0);
        $table->decimal('amount', 15, 3);
        $table->decimal('amount_canc', 15, 3);
        $table->decimal('quantity_pickup', 8, 0);
        $table->decimal('amount_pickup', 15, 3);
        $table->decimal('amount_loan', 15, 3);
        $table->primary(['store_key','pos_number','fiscal_date','media_id'], 'index_accum_media');
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
		Schema::drop('accum_media');
	}
}
