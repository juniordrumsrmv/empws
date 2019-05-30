<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSendRoutesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
                if ( !Schema::hasTable('send_routes') ) {

                    Schema::create('send_routes', function(Blueprint $table)
                    {
                            $table->smallInteger('type_oper')->unsigned()->nullable();
                            $table->smallInteger('model_type')->unsigned()->nullable();
                            $table->bigInteger('store_key')->unsigned()->nullable();
                            $table->string('file_path')->nullable();
                            $table->string('file_name')->nullable();
                            $table->dateTime('last_change_time')->nullable();
                            $table->unique(['type_oper','model_type','store_key'], 'index_send_routes');
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
		Schema::drop('send_routes');
	}
}
