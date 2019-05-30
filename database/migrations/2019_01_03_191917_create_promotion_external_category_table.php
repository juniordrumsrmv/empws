<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePromotionExternalCategoryTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        if ( !Schema::hasTable('promotion_external_category') ) {
		Schema::create('promotion_external_category', function(Blueprint $table)

		{
			$table->bigInteger('promotion_key');
			$table->bigInteger('store_key');
			$table->smallInteger('store_group_key');
			$table->smallInteger('cst_type_key');
			$table->boolean('status')->nullable();
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
		Schema::drop('promotion_external_category');
	}
}
