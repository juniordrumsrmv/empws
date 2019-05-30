<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePromotionGiftTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        if ( !Schema::hasTable('promotion_gift') ) {
		Schema::create('promotion_gift', function(Blueprint $table)

		{
			$table->bigInteger('promotion_key')->unsigned();
			$table->bigInteger('store_key')->unsigned();
			$table->bigInteger('plu_key')->unsigned();
			$table->decimal('amount', 15, 3)->nullable();
			$table->decimal('points', 15, 3)->nullable();
			$table->boolean('status')->nullable();
			$table->primary(['promotion_key','store_key','plu_key'], 'index_promotion_gift');
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
		Schema::drop('promotion_gift');
	}
}
