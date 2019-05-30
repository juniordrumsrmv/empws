<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSessionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
                if ( !Schema::hasTable('session') ) {

                    Schema::create('session', function(Blueprint $table)
                    {
                            $table->bigInteger('session_key', true)->unsigned();
                            $table->string('session_id', 32)->nullable();
                            $table->bigInteger('agent_key')->unsigned()->nullable();
                            $table->boolean('status')->nullable();
                            $table->dateTime('start_time')->nullable();
                            $table->dateTime('finish_time')->nullable();
                            $table->dateTime('update_time')->nullable();
                            $table->bigInteger('store_key')->unsigned()->nullable();
                            $table->smallInteger('pos_number')->unsigned()->nullable();
                            $table->string('terminal_ip', 32)->nullable();
                            $table->index(['agent_key','status'], 'index_session_user_alternate_id');
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
		Schema::drop('session');
	}
}
