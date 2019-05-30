<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePlanSplitTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        if ( !Schema::hasTable('plan_split') ) {
		Schema::create('plan_split', function(Blueprint $table)

		{
			$table->bigInteger('plan_key')->unsigned();
			$table->smallInteger('plan_split_splits')->unsigned();
			$table->string('plan_split_name', 30)->nullable();
			$table->decimal('plan_split_rate', 5)->nullable();
			$table->boolean('plan_split_method')->nullable();
			$table->decimal('plan_split_min_split_amount', 12)->nullable();
			$table->boolean('plan_split_status')->nullable();
			$table->dateTime('last_change_time')->nullable();
			$table->bigInteger('plan_split_code_key')->unsigned()->nullable()->default(0);
			$table->bigInteger('plan_split_type_key')->unsigned()->nullable()->default(0);
			$table->primary(['plan_key','plan_split_splits'], 'index_plan_split');
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
		Schema::drop('plan_split');
	}
}
