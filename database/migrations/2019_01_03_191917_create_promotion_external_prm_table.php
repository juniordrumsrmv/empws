<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePromotionExternalPrmTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        if ( !Schema::hasTable('promotion_external_prm') ) {
		Schema::create('promotion_external_prm', function(Blueprint $table)

		{
			$table->bigInteger('promotion_key')->unsigned();
			$table->bigInteger('store_key')->unsigned();
			$table->char('data_name', 30);
			$table->char('data_id', 30);
			$table->text('data_value', 65535)->nullable();
			$table->smallInteger('data_type')->nullable();
			$table->smallInteger('data_hidden')->nullable();
			$table->primary(['promotion_key','store_key','data_id'], 'index_promotion_external_prm');
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
		Schema::drop('promotion_external_prm');
	}
}
