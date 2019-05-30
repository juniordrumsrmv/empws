<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAgentTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        if ( !Schema::hasTable('agent') ) {
		Schema::create('agent', function(Blueprint $table)

		{
			$table->bigInteger('agent_key', true)->unsigned();
			$table->integer('agent_type')->unsigned();
			$table->string('id', 16);
			$table->string('name', 50)->nullable();
			$table->string('remark')->nullable();
			$table->boolean('sub_type')->nullable();
			$table->boolean('pos_send_group')->nullable()->default(0);
			$table->unique(['agent_type','id'], 'index_agent_id');
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
		Schema::drop('agent');
	}
}
