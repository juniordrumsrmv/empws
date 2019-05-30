<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePromotionPrizeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        if ( !Schema::hasTable('promotion_prize') ) {
		Schema::create('promotion_prize', function(Blueprint $table)

		{
			$table->bigInteger('promotion_key')->unsigned();
			$table->bigInteger('store_key')->unsigned();
			$table->smallInteger('store_group_key')->unsigned()->default(0);
			$table->bigInteger('initial_number')->unsigned();
			$table->bigInteger('increase')->unsigned();
			$table->bigInteger('quantity')->unsigned();
			$table->decimal('amount', 15, 3);
			$table->boolean('status')->nullable();
			$table->primary(['promotion_key','store_key','store_group_key'], 'index_promotion_prize');
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
		Schema::drop('promotion_prize');
	}
}
