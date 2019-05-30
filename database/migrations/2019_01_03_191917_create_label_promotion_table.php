<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLabelPromotionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        if ( !Schema::hasTable('label_promotion') ) {
		Schema::create('label_promotion', function(Blueprint $table)

		{
			$table->bigInteger('code', true)->unsigned();
			$table->bigInteger('plu_id')->unsigned();
			$table->decimal('price', 15, 3);
			$table->dateTime('start')->nullable();
			$table->dateTime('finish')->nullable();
			$table->integer('reason_type_key')->unsigned()->nullable();
			$table->bigInteger('store_key')->unsigned()->nullable();
			$table->char('label_sku', 14)->nullable();
			$table->integer('label_quantity')->nullable();
			$table->dateTime('label_printing_date')->nullable();
			$table->integer('status')->nullable();
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
		Schema::drop('label_promotion');
	}
}
