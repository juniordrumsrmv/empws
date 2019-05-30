<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePlanTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        if ( !Schema::hasTable('plan') ) {
		Schema::create('plan', function(Blueprint $table)

		{
			$table->bigInteger('plan_key')->unsigned()->primary();
			$table->smallInteger('cst_type_key')->unsigned();
			$table->smallInteger('media_id');
			$table->smallInteger('media_sub_id')->unsigned();
			$table->smallInteger('plan_min_payment')->nullable();
			$table->smallInteger('plan_max_payment')->nullable();
			$table->decimal('plan_rate', 5);
			$table->string('plan_name', 50)->nullable();
			$table->decimal('plan_min_amount', 12)->nullable();
			$table->boolean('plan_status')->nullable();
			$table->dateTime('plan_start_time')->nullable();
			$table->dateTime('plan_end_time')->nullable();
			$table->dateTime('last_change_time')->nullable();
			$table->string('option_01', 250)->nullable();
			$table->string('option_02', 250)->nullable();
			$table->string('option_03', 250)->nullable();
			$table->string('option_04', 250)->nullable();
			$table->string('option_05', 250)->nullable();
			$table->string('option_06', 250)->nullable();
			$table->string('option_07', 250)->nullable();
			$table->string('option_08', 250)->nullable();
			$table->string('option_09', 250)->nullable();
			$table->string('option_10', 250)->nullable();
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
		Schema::drop('plan');
	}
}
