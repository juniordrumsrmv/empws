<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateComparisonTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        if ( !Schema::hasTable('comparison') ) {
		Schema::create('comparison', function(Blueprint $table)

		{
			$table->smallInteger('type')->unsigned();
			$table->string('label', 64)->nullable();
			$table->string('f1_data', 80)->nullable();
			$table->string('f2_data', 80)->nullable();
			$table->string('f3_data', 80)->nullable();
			$table->string('f4_data', 80)->nullable();
			$table->string('f5_data', 80)->nullable();
			$table->string('to_data', 80)->nullable();
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
		Schema::drop('comparison');
	}
}
