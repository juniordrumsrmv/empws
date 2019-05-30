<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePluPackTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        if ( !Schema::hasTable('plu_pack') ) {
		Schema::create('plu_pack', function(Blueprint $table)

		{
			$table->bigInteger('store_key')->unsigned()->default(0);
			$table->bigInteger('plu_key_main')->unsigned();
			$table->bigInteger('plu_key')->unsigned();
			$table->primary(['store_key','plu_key_main','plu_key'], 'index_plu_pack');
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
		Schema::drop('plu_pack');
	}
}
