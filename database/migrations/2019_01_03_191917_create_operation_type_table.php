<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOperationTypeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        if ( !Schema::hasTable('operation_type') ) {
		Schema::create('operation_type', function(Blueprint $table)

		{
			$table->smallInteger('operation_type_key')->unsigned()->primary();
			$table->string('description', 128)->nullable();
			$table->boolean('ope_type')->nullable();
			$table->text('observation', 65535)->nullable();
			$table->boolean('op_signal')->nullable();
			$table->boolean('op_export')->nullable();
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
		Schema::drop('operation_type');
	}
}
