<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCustodiamDataTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        if ( !Schema::hasTable('custodiam_data') ) {
		Schema::create('custodiam_data', function(Blueprint $table)

		{
			$table->smallInteger('custodiam_partner')->unsigned();
			$table->smallInteger('custodiam_service_type')->unsigned();
			$table->string('custodiam_url')->nullable();
			$table->string('custodiam_name_space')->nullable();
			$table->smallInteger('custodiam_action_type')->unsigned();
			$table->text('custodiam_ws_submit_format', 65535)->nullable();
			$table->text('custodiam_ws_query_format', 65535)->nullable();
			$table->primary(['custodiam_service_type','custodiam_action_type'], 'index_custodiam_data');
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
		Schema::drop('custodiam_data');
	}
}
