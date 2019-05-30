<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateComparisonTypeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        if ( !Schema::hasTable('comparison_type') ) {
		Schema::create('comparison_type', function(Blueprint $table)

		{
			$table->smallInteger('type')->unsigned()->primary();
			$table->string('label', 64)->nullable();
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
		Schema::drop('comparison_type');
	}
}
