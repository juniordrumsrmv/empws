<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAccumItemPriceTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
    if ( !Schema::hasTable('accum_item_price') ) {

      Schema::create('accum_item_price', function(Blueprint $table)
      {
        $table->bigInteger('store_key')->unsigned();
        $table->smallInteger('pos_number')->unsigned();
        $table->date('fiscal_date');
        $table->bigInteger('plu_id')->unsigned();
        $table->integer('type_price')->unsigned();
        $table->bigInteger('transaction_counter')->unsigned();
        $table->decimal('quantity', 15, 3);
        $table->decimal('quantity_canc', 15, 3);
        $table->decimal('amount', 15, 3);
        $table->decimal('amount_canc', 15, 3);
        $table->decimal('return_quantity', 15, 3)->nullable();
        $table->decimal('return_amount', 15, 3)->nullable();
        $table->smallInteger('department_key')->unsigned()->nullable();
        $table->bigInteger('maker_key')->unsigned()->nullable();
        $table->primary(['store_key','pos_number','fiscal_date','plu_id','type_price'], 'index_accum_item_price');
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
		Schema::drop('accum_item_price');
	}
}
