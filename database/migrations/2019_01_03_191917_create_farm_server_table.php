<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFarmServerTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        if ( !Schema::hasTable('farm_server') ) {
		Schema::create('farm_server', function(Blueprint $table)

		{
			$table->smallInteger('farm_server_key')->unsigned()->primary();
			$table->string('farm_server_name')->nullable();
			$table->string('farm_server_ip', 32)->nullable();
			$table->boolean('farm_server_priority')->nullable();
			$table->boolean('farm_server_status')->nullable();
			$table->string('farm_server_directory')->nullable();
			$table->string('farm_server_substitute')->nullable();
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
		Schema::drop('farm_server');
	}
}
