<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFiscalStateTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        if ( !Schema::hasTable('fiscal_state') ) {
		Schema::create('fiscal_state', function(Blueprint $table)

		{
			$table->char('fiscal_state_acronym', 4);
			$table->smallInteger('fiscal_state_type')->unsigned();
			$table->string('fiscal_state_url')->nullable();
			$table->string('fiscal_state_name_space')->nullable();
			$table->text('fiscal_state_ws_submit_format', 65535)->nullable();
			$table->text('fiscal_state_ws_query_format', 65535)->nullable();
			$table->text('fiscal_state_ws_submit_header', 65535)->nullable();
			$table->text('fiscal_state_ws_query_header', 65535)->nullable();
			$table->primary(['fiscal_state_acronym','fiscal_state_type'], 'index_fiscal_state');
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
		Schema::drop('fiscal_state');
	}
}
