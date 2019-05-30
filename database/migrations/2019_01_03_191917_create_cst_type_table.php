<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCstTypeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        if ( !Schema::hasTable('cst_type') ) {
		Schema::create('cst_type', function(Blueprint $table)

		{
			$table->smallInteger('cst_type_key')->unsigned()->primary();
			$table->string('cst_name', 20);
			$table->decimal('cst_discount', 6)->nullable();
			$table->boolean('cst_second_ticket')->nullable();
			$table->integer('cst_type_price')->unsigned()->nullable();
			$table->decimal('cst_extra_discount', 6)->nullable();
			$table->integer('cst_extra_type_price')->unsigned()->nullable();
			$table->dateTime('last_change_time')->nullable();
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
		Schema::drop('cst_type');
	}
}
