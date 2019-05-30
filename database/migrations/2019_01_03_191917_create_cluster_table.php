<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateClusterTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        if ( !Schema::hasTable('cluster') ) {
		Schema::create('cluster', function(Blueprint $table)

		{
			$table->text('server_name', 65535)->nullable();
			$table->text('server_path', 65535)->nullable();
			$table->bigInteger('store_key')->primary();
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
		Schema::drop('cluster');
	}
}
