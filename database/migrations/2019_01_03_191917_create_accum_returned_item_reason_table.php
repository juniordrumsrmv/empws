<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAccumReturnedItemReasonTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        if ( !Schema::hasTable('accum_returned_item_reason') ) {
		Schema::create('accum_returned_item_reason', function(Blueprint $table)

		{
			$table->bigInteger('store_key')->unsigned();
			$table->smallInteger('pos_number')->unsigned();
			$table->date('fiscal_date');
			$table->bigInteger('plu_id')->unsigned();
			$table->string('desc_plu', 48);
			$table->decimal('quantity', 15, 3);
			$table->decimal('amount', 15, 3);
			$table->smallInteger('department_key')->unsigned()->nullable();
			$table->bigInteger('maker_key')->unsigned()->nullable();
			$table->smallInteger('reason')->unsigned();
			$table->smallInteger('transaction')->unsigned();
			$table->primary(['store_key','fiscal_date','pos_number','plu_id','reason','transaction'], 'index_accum_returned_item_reason');
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
		Schema::drop('accum_returned_item_reason');
	}
}
