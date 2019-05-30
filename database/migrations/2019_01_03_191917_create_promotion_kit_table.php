<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePromotionKitTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        if ( !Schema::hasTable('promotion_kit') ) {
		Schema::create('promotion_kit', function(Blueprint $table)

		{
			$table->bigInteger('promotion_key', true)->unsigned();
			$table->bigInteger('plu_kit')->unsigned();
			$table->bigInteger('plu_key')->unsigned();
			$table->bigInteger('store_key')->unsigned();
			$table->smallInteger('store_group_key')->unsigned()->default(0);
			$table->decimal('discount', 15, 3)->nullable();
			$table->smallInteger('flag_discount')->nullable()->default(0);
			$table->decimal('points', 15, 3)->nullable();
			$table->smallInteger('count_type')->nullable()->default(0);
			$table->unique(['promotion_key','plu_kit','plu_key','store_key','store_group_key'], 'index_promotion_kit');
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
		Schema::drop('promotion_kit');
	}
}
