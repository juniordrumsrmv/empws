<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBinTypeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        if ( !Schema::hasTable('bin_type') ) {
		Schema::create('bin_type', function(Blueprint $table)

		{
			$table->smallInteger('bin_key')->unsigned()->primary();
			$table->string('bin_name', 30)->nullable();
			$table->smallInteger('acquirr_key')->unsigned();
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
		Schema::drop('bin_type');
	}
}
