<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAccumRefundItemTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
    if ( !Schema::hasTable('accum_refund_item') ) {

      Schema::create('accum_refund_item', function(Blueprint $table)
      {
        $table->bigInteger('store_key')->unsigned();
        $table->smallInteger('pos_number')->unsigned();
        $table->date('fiscal_date');
        $table->bigInteger('plu_id')->unsigned();
        $table->string('desc_plu', 48);
        $table->decimal('quantity', 15, 3);
        $table->decimal('quantity_canc', 15, 3);
        $table->decimal('amount', 15, 3);
        $table->decimal('amount_canc', 15, 3);
        $table->decimal('discount', 15, 3);
        $table->decimal('discount_canc', 15, 3);
        $table->smallInteger('department_key')->unsigned()->nullable();
        $table->bigInteger('maker_key')->unsigned()->nullable();
        $table->smallInteger('transaction')->unsigned();
        $table->unique(['store_key','fiscal_date','pos_number','plu_id','transaction'], 'index_refund_accum_item');
        $table->unique(['store_key','fiscal_date','plu_id','pos_number','transaction'], 'index_refund_accum_pos');
        $table->unique(['fiscal_date','store_key','pos_number','plu_id','transaction'], 'index_refund_accum_date');
        $table->index(['fiscal_date','store_key','department_key','transaction'], 'index_refund_accum_item_dept');
        $table->index(['fiscal_date','store_key','maker_key','transaction'], 'index_refund_accum_item_maker');
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
		Schema::drop('accum_refund_item');
	}
}
