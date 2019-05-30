<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAccumItemTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
    if ( !Schema::hasTable('accum_item') ) {

      Schema::create('accum_item', function(Blueprint $table)
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
        $table->decimal('cost', 15, 4);
        $table->decimal('cost_canc', 15, 4);
        $table->decimal('margin', 15, 3);
        $table->decimal('return_quantity', 15, 3)->nullable();
        $table->decimal('return_amount', 15, 3)->nullable();
        $table->smallInteger('department_key')->unsigned()->nullable();
        $table->bigInteger('maker_key')->unsigned()->nullable();
        $table->decimal('received_quantity', 15, 3)->nullable();
        $table->decimal('received_amount', 15, 3)->nullable();
        $table->boolean('pis_cofins')->nullable();
        $table->unique(['store_key','fiscal_date','pos_number','plu_id'], 'index_accum_item');
        $table->unique(['store_key','fiscal_date','plu_id','pos_number'], 'index_accum_pos');
        $table->unique(['fiscal_date','store_key','pos_number','plu_id'], 'index_accum_date');
        $table->index(['fiscal_date','store_key','department_key'], 'index_accum_item_dept');
        $table->index(['fiscal_date','store_key','maker_key'], 'index_accum_item_maker');
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
		Schema::drop('accum_item');
	}
}
