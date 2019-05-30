<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAcquirrTypeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        if ( !Schema::hasTable('acquirr_type') ) {
		Schema::create('acquirr_type', function(Blueprint $table)

		{
			$table->smallInteger('acquirr_key')->unsigned()->primary();
			$table->string('acquirr_name', 30)->nullable();
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
		Schema::drop('acquirr_type');
	}
}
