<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSngpcControlTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
                if ( !Schema::hasTable('sngpc_control') ) {

                    Schema::create('sngpc_control', function(Blueprint $table)
                    {
                            $table->bigInteger('sngpc_id', true)->unsigned();
                            $table->bigInteger('store_key')->unsigned();
                            $table->date('date_initial')->nullable();
                            $table->date('date_final')->nullable();
                            $table->dateTime('date_create')->nullable();
                            $table->dateTime('date_send')->nullable();
                            $table->dateTime('date_last_send')->nullable();
                            $table->smallInteger('qty_tries')->unsigned()->nullable();
                            $table->string('notes')->nullable();
                            $table->smallInteger('status')->unsigned()->nullable();
                            $table->smallInteger('return_code')->unsigned()->nullable();
                            $table->string('return_msg')->nullable();
                            $table->smallInteger('qty_registers')->unsigned()->nullable();
                            $table->string('file_path')->nullable();
                            $table->unique(['sngpc_id','store_key'], 'index_sngpc_control');
                            $table->index(['sngpc_id','store_key','date_initial'], 'index_sngpc_control_1');
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
		Schema::drop('sngpc_control');
	}
}
