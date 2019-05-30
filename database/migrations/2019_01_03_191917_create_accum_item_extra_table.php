<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAccumItemExtraTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
    if ( !Schema::hasTable('accum_item_extra') ) {

      Schema::create('accum_item_extra', function(Blueprint $table)
      {
        $table->bigInteger('store_key')->unsigned();
        $table->date('fiscal_date');
        $table->bigInteger('plu_id')->unsigned();
        $table->smallInteger('sale_type')->unsigned();
        $table->smallInteger('invoice_type')->unsigned();
        $table->string('desc_plu', 48);
        $table->decimal('quantity', 15, 3);
        $table->decimal('amount', 15, 3);
        $table->decimal('cost', 15, 4);
        $table->smallInteger('department_key')->unsigned()->nullable();
        $table->bigInteger('maker_key')->unsigned()->nullable();
        $table->primary(['store_key','fiscal_date','plu_id','sale_type','invoice_type'], 'index_accum_item_extra');
        $table->index(['store_key','plu_id','sale_type','invoice_type','fiscal_date'], 'index_accum_item_extra_1');
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
		Schema::drop('accum_item_extra');
	}
}
