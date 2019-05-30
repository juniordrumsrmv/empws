<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMakerSkuTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        if ( !Schema::hasTable('maker_sku') ) {
		Schema::create('maker_sku', function(Blueprint $table)

		{
			$table->char('maker_sku_id', 30);
			$table->smallInteger('maker_sku_type_key')->unsigned();
			$table->bigInteger('maker_key')->unsigned()->index('index_sku_maker_key');
			$table->boolean('maker_sku_status')->nullable();
			$table->dateTime('last_change_time')->nullable();
			$table->primary(['maker_sku_id','maker_sku_type_key']);
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
		Schema::drop('maker_sku');
	}
}
