<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateNpSkuIdTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        if ( !Schema::hasTable('np_sku_id') ) {
		Schema::create('np_sku_id', function(Blueprint $table)

		{
			$table->char('sku_id', 14);
			$table->bigInteger('np_id')->unsigned();
			$table->primary(['sku_id','np_id'], 'index_np_sku_id');
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
		Schema::drop('np_sku_id');
	}
}
