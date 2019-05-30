<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePromotionDotzTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        if ( !Schema::hasTable('promotion_dotz') ) {
		Schema::create('promotion_dotz', function(Blueprint $table)

		{
			$table->bigInteger('promotion_key')->unsigned();
			$table->bigInteger('store_key')->unsigned();
			$table->bigInteger('plu_key')->unsigned();
			$table->decimal('points', 15, 3)->nullable();
			$table->primary(['promotion_key','store_key','plu_key'], 'index_promotion_dotz');
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
		Schema::drop('promotion_dotz');
	}
}
