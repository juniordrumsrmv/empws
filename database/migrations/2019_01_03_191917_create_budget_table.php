<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBudgetTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        if ( !Schema::hasTable('budget') ) {
		Schema::create('budget', function(Blueprint $table)

		{
			$table->bigInteger('store_key')->unsigned();
			$table->decimal('budget_sale', 15, 3)->nullable();
			$table->decimal('budget_margim', 9, 3)->nullable();
			$table->date('budget_date');
			$table->dateTime('last_change_time')->nullable();
			$table->primary(['store_key','budget_date'], 'index_budget');
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
		Schema::drop('budget');
	}
}
