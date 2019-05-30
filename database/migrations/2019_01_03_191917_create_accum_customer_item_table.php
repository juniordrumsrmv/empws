<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAccumCustomerItemTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
    if ( !Schema::hasTable('accum_customer_item') ) {

      Schema::create('accum_customer_item', function(Blueprint $table)
      {
        $table->bigInteger('customer_key')->unsigned();
        $table->bigInteger('store_key')->unsigned();
        $table->date('fiscal_date');
        $table->bigInteger('department_key')->unsigned();
        $table->bigInteger('plu_id')->unsigned();
        $table->decimal('quantity', 15, 3);
        $table->decimal('quantity_canc', 15, 3);
        $table->decimal('amount', 15, 3);
        $table->decimal('amount_canc', 15, 3);
        $table->decimal('return_quantity', 15, 3)->nullable();
        $table->decimal('return_amount', 15, 3)->nullable();
        $table->primary(['customer_key','store_key','fiscal_date','department_key','plu_id'], 'accum_customer_item_index');
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
		Schema::drop('accum_customer_item');
	}
}
