<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateKitListTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        if ( !Schema::hasTable('kit_list') ) {
		Schema::create('kit_list', function(Blueprint $table)

		{
			$table->bigInteger('plu_key_main')->unsigned();
			$table->bigInteger('plu_key')->unsigned();
			$table->decimal('quantity', 6, 3);
			$table->integer('price_key')->unsigned()->nullable();
			$table->primary(['plu_key_main','plu_key'], 'index_kit_list');
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
		Schema::drop('kit_list');
	}
}
