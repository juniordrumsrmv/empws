<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSngpcPrescriberTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
                if ( !Schema::hasTable('sngpc_prescriber') ) {

                    Schema::create('sngpc_prescriber', function(Blueprint $table)
                    {
                            $table->bigInteger('sngpc_key')->unsigned()->primary();
                            $table->string('prescriber_type', 5);
                            $table->string('prescriber_code', 10);
                            $table->string('prescriber_name', 60);
                            $table->string('register_state', 3);
                            $table->index(['sngpc_key','prescriber_type','prescriber_code'], 'sngpc_prescriber_index_1');
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
		Schema::drop('sngpc_prescriber');
	}
}
