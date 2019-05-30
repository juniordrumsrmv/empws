<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAgentStoreGroupTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        if ( !Schema::hasTable('agent_store_group') ) {
		Schema::create('agent_store_group', function(Blueprint $table)

		{
			$table->bigInteger('store_group_key')->unsigned();
			$table->bigInteger('agent_key')->unsigned();
			$table->primary(['agent_key','store_group_key'], 'index_agent_store_group');
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
		Schema::drop('agent_store_group');
	}
}
