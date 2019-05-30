<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateServertoserverStoreTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
                if ( !Schema::hasTable('servertoserver_store') ) {

                    Schema::create('servertoserver_store', function(Blueprint $table)
                    {
                            $table->bigInteger('store_key')->unsigned()->primary();
                            $table->boolean('main_server_type_flag')->nullable();
                            $table->boolean('sec_server_type_flag')->nullable();
                            $table->dateTime('last_change_time')->nullable();
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
		Schema::drop('servertoserver_store');
	}
}
