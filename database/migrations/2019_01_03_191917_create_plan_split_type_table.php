<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePlanSplitTypeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        if ( !Schema::hasTable('plan_split_type') ) {
		Schema::create('plan_split_type', function(Blueprint $table)

		{
			$table->bigInteger('plan_split_type_key')->unsigned()->primary();
			$table->char('plan_split_type_desc', 128);
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
		Schema::drop('plan_split_type');
	}
}
