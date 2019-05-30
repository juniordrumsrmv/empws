<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePromotionPrizeControlTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        if ( !Schema::hasTable('promotion_prize_control') ) {
		Schema::create('promotion_prize_control', function(Blueprint $table)

		{
			$table->bigInteger('promotion_key')->unsigned();
			$table->bigInteger('store_key')->unsigned();
			$table->date('ppc_date');
			$table->dateTime('ppc_time');
			$table->bigInteger('ppc_number')->unsigned()->nullable();
			$table->bigInteger('eft_trans_nsu')->unsigned()->index('ppc_eft_trans_nsu');
			$table->primary(['promotion_key','store_key','ppc_date','ppc_time'], 'index_promotion_prize_control');
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
		Schema::drop('promotion_prize_control');
	}
}
