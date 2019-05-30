<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateNcmCestTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        if ( !Schema::hasTable('ncm_cest') ) {
		Schema::create('ncm_cest', function(Blueprint $table)

		{
			$table->bigInteger('ncm_key')->unsigned();
			$table->string('cest_code', 12);
			$table->primary(['ncm_key','cest_code'], 'index_ncm_cest');
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
		Schema::drop('ncm_cest');
	}
}
