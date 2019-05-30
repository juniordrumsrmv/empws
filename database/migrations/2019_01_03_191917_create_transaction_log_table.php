<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTransactionLogTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
                if ( !Schema::hasTable('transaction_log') ) {

                    Schema::create('transaction_log', function(Blueprint $table)
                    {
                            $table->bigInteger('log_key', true)->unsigned();
                            $table->integer('access_type_key')->unsigned();
                            $table->dateTime('start_time');
                            $table->string('user_id', 10);
                            $table->string('terminal_ip', 36);
                            $table->integer('entity_type_key')->unsigned();
                            $table->string('entity', 40);
                            $table->string('program_file', 64);
                            $table->string('key_value')->nullable();
                            $table->text('new_data', 65535)->nullable();
                            $table->index(['start_time','user_id','entity','access_type_key'], 'index_log');
                            $table->index(['user_id','entity'], 'index_login');
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
		Schema::drop('transaction_log');
	}
}
