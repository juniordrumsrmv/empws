<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLmcSequenceTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        if ( !Schema::hasTable('lmc_sequence') ) {
		Schema::create('lmc_sequence', function(Blueprint $table)

		{
			$table->bigInteger('store_key')->unsigned();
			$table->bigInteger('plu_key')->unsigned();
			$table->date('fiscal_date');
			$table->bigInteger('sequence')->unsigned()->nullable();
			$table->boolean('lmc_type')->nullable();
			$table->text('lmc_obs', 65535)->nullable();
			$table->dateTime('last_change_time')->nullable();
			$table->primary(['store_key','plu_key','fiscal_date'], 'index_lmc_sequence');
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
		Schema::drop('lmc_sequence');
	}
}
