<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateServertoserverComparisonTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
                if ( !Schema::hasTable('servertoserver_comparison') ) {

                    Schema::create('servertoserver_comparison', function(Blueprint $table)
                    {
                            $table->bigInteger('from_store_key');
                            $table->bigInteger('to_store_key');
                            $table->string('description')->nullable();
                            $table->string('store_ip', 20)->nullable();
                            $table->string('directory')->nullable();
                            $table->string('ctrl_file')->nullable();
                            $table->smallInteger('update_wait_time')->nullable();
                            $table->dateTime('last_change_time')->nullable();
                            $table->primary(['from_store_key','to_store_key'], 'index_servertoserver_comparison');
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
		Schema::drop('servertoserver_comparison');
	}
}
