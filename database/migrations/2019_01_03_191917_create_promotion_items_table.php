<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePromotionItemsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        if ( !Schema::hasTable('promotion_items') ) {
		Schema::create('promotion_items', function(Blueprint $table)

		{
			$table->bigInteger('promotion_key')->unsigned();
			$table->bigInteger('plu_key')->unsigned();
			$table->decimal('price', 15, 3)->nullable();
			$table->boolean('status')->nullable();
			$table->decimal('points', 15, 3)->nullable();
			$table->unique(['promotion_key','plu_key'], 'index_promo_item');
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
		Schema::drop('promotion_items');
	}
}
