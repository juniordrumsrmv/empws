<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSkuStorePluTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
                if ( !Schema::hasTable('sku_store_plu') ) {

                    Schema::create('sku_store_plu', function(Blueprint $table)
                    {
                            $table->char('sku_id', 14);
                            $table->bigInteger('store_key')->unsigned();
                            $table->bigInteger('plu_key')->unsigned();
                            $table->primary(['store_key','plu_key','sku_id'], 'index_sku_store_plu');
                            $table->index(['sku_id','store_key','plu_key'], 'index_sku_id');
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
		Schema::drop('sku_store_plu');
	}
}
