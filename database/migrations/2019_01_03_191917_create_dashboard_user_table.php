<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDashboardUserTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        if ( !Schema::hasTable('dashboard_user') ) {
		Schema::create('dashboard_user', function(Blueprint $table)

		{
			$table->bigInteger('agent_id')->unsigned();
			$table->bigInteger('prm_type')->unsigned();
			$table->string('prm_id', 24);
			$table->text('prm_value', 65535)->nullable();
			$table->primary(['agent_id','prm_type','prm_id'], 'index_dashboard_user');
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
		Schema::drop('dashboard_user');
	}
}
