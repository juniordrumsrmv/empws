<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateStateTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
                if ( !Schema::hasTable('state') ) {

                    Schema::create('state', function(Blueprint $table)
                    {
                            $table->char('acronym', 4)->primary();
                            $table->string('name')->nullable();
                            $table->boolean('timezone')->nullable();
                            $table->boolean('dls_timezone')->nullable();
                            $table->char('state_code', 10)->nullable();
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
		Schema::drop('state');
	}
}
