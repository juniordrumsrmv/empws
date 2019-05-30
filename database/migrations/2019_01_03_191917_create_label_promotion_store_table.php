<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLabelPromotionStoreTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        if ( !Schema::hasTable('label_promotion_store') ) {
		Schema::create('label_promotion_store', function(Blueprint $table)

		{
			$table->bigInteger('code')->unsigned();
			$table->bigInteger('store_key')->unsigned();
			$table->integer('label_quantity')->nullable();
			$table->dateTime('label_printing_date')->nullable();
			$table->primary(['code','store_key'], 'index_label_promotion_store');
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
		Schema::drop('label_promotion_store');
	}
}
