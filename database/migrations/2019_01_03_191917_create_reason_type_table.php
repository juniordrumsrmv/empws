<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateReasonTypeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        if ( !Schema::hasTable('reason_type') ) {
		Schema::create('reason_type', function(Blueprint $table)

		{
			$table->integer('reason_type_key')->unsigned()->primary();
			$table->string('description')->nullable();
			$table->bigInteger('reason_command')->unsigned();
			$table->bigInteger('store_key')->unsigned()->nullable();
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
		Schema::drop('reason_type');
	}
}
