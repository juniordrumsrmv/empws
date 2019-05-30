<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGtinPrefixTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        if ( !Schema::hasTable('gtin_prefix') ) {
		Schema::create('gtin_prefix', function(Blueprint $table)

		{
			$table->string('prefix_in', 24)->nullable();
			$table->string('prefix_fin', 24)->nullable();
			$table->integer('ind_esp')->nullable();
			$table->string('country_name')->nullable();
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
		Schema::drop('gtin_prefix');
	}
}
