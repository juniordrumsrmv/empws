<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSkuTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
                if ( !Schema::hasTable('sku') ) {

                    Schema::create('sku', function(Blueprint $table)
                    {
                            $table->char('sku_id', 14)->primary();
                            $table->bigInteger('plu_key')->unsigned()->index('index_sku_plu_key');
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
		Schema::drop('sku');
	}
}
