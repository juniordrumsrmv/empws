<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePluExtraTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        if ( !Schema::hasTable('plu_extra') ) {
		Schema::create('plu_extra', function(Blueprint $table)

		{
			$table->bigInteger('store_key')->unsigned();
			$table->bigInteger('plu_key')->unsigned();
			$table->char('extra_key', 12);
			$table->string('extra_value', 128)->nullable();
			$table->primary(['store_key','plu_key','extra_key'], 'index_plu_extra');
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
		Schema::drop('plu_extra');
	}
}
