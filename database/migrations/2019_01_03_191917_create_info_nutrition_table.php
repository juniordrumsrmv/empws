<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateInfoNutritionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        if ( !Schema::hasTable('info_nutrition') ) {
		Schema::create('info_nutrition', function(Blueprint $table)

		{
			$table->bigInteger('plu_key')->unsigned()->primary();
			$table->decimal('quantity_portion', 8, 3)->nullable()->default(0.000);
			$table->smallInteger('unit_portion')->nullable()->default(0);
			$table->decimal('full_part', 8, 3)->nullable()->default(0.000);
			$table->smallInteger('decimal_household_measure')->nullable()->default(0);
			$table->smallInteger('household_measure')->nullable()->default(0);
			$table->smallInteger('status')->nullable();
			$table->smallInteger('caloric_value')->nullable()->default(0);
			$table->decimal('carbohydrates', 4, 1)->nullable()->default(0.0);
			$table->decimal('protein', 3, 1)->nullable()->default(0.0);
			$table->decimal('total_fat', 3, 1)->nullable()->default(0.0);
			$table->decimal('saturated_fat', 3, 1)->nullable()->default(0.0);
			$table->decimal('trans_fat', 3, 1)->nullable()->default(0.0);
			$table->decimal('dietary_fiber', 3, 1)->nullable()->default(0.0);
			$table->decimal('sodium', 5, 1)->nullable()->default(0.0);
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
		Schema::drop('info_nutrition');
	}
}
