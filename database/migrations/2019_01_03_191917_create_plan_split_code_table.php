<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePlanSplitCodeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        if ( !Schema::hasTable('plan_split_code') ) {
		Schema::create('plan_split_code', function(Blueprint $table)

		{
			$table->bigInteger('plan_split_code_key')->unsigned()->primary();
			$table->char('plan_split_code_desc', 128);
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
		Schema::drop('plan_split_code');
	}
}
