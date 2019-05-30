<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateExtraTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        if ( !Schema::hasTable('extra') ) {
		Schema::create('extra', function(Blueprint $table)

		{
			$table->char('extra_key', 12)->primary();
			$table->string('name', 50)->nullable();
			$table->smallInteger('type')->unsigned()->nullable();
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
		Schema::drop('extra');
	}
}
