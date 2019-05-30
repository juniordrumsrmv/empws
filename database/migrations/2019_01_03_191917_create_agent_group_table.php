<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAgentGroupTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        if ( !Schema::hasTable('agent_group') ) {
		Schema::create('agent_group', function(Blueprint $table)

		{
			$table->bigInteger('group_key')->unsigned();
			$table->bigInteger('agent_key')->unsigned();
			$table->primary(['group_key','agent_key'], 'index_agent_group');
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
		Schema::drop('agent_group');
	}
}
