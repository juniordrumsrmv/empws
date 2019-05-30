<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePromotionItemTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        if ( !Schema::hasTable('promotion_item') ) {
		Schema::create('promotion_item', function(Blueprint $table)

		{
			$table->bigInteger('promotion_key')->unsigned();
			$table->bigInteger('store_key')->unsigned();
			$table->smallInteger('store_group_key')->unsigned()->default(0);
			$table->bigInteger('plu_key')->unsigned();
			$table->smallInteger('item_type')->unsigned();
			$table->decimal('price', 15, 3)->nullable();
			$table->decimal('points', 15, 3)->nullable();
			$table->bigInteger('quantity_min')->unsigned()->nullable();
			$table->bigInteger('quantity_lim')->unsigned()->nullable();
			$table->bigInteger('quantity_max')->unsigned()->nullable();
			$table->decimal('amount', 15, 3)->nullable();
			$table->boolean('status')->nullable();
			$table->smallInteger('flag_discount')->nullable()->default(0);
			$table->primary(['promotion_key','store_key','store_group_key','plu_key','item_type'], 'index_promotion_item');
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
		Schema::drop('promotion_item');
	}
}
