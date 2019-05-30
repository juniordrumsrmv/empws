<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePromotionCategoryTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        if ( !Schema::hasTable('promotion_category') ) {
		Schema::create('promotion_category', function(Blueprint $table)

		{
			$table->bigInteger('promotion_key')->unsigned();
			$table->bigInteger('store_key')->unsigned();
			$table->smallInteger('store_group_key')->unsigned()->default(0);
			$table->smallInteger('cst_type_key')->unsigned();
			$table->boolean('status')->nullable();
			$table->index(['promotion_key','store_key'], 'index_promo_store');
			$table->index(['promotion_key','cst_type_key'], 'index_promo_category');
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
		Schema::drop('promotion_category');
	}
}
