<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDashUserConfTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        if ( !Schema::hasTable('dash_user_conf') ) {
		Schema::create('dash_user_conf', function(Blueprint $table)

		{
			$table->string('id_user', 30);
			$table->string('module', 50);
			$table->string('panel', 50);
			$table->integer('position');
			$table->string('config', 250);
			$table->primary(['id_user','position'], 'index_dash_user_conf');
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
		Schema::drop('dash_user_conf');
	}
}
