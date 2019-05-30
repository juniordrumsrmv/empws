<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAccumLogTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
    if ( !Schema::hasTable('accum_log') ) {

      Schema::create('accum_log', function(Blueprint $table)
      {
        $table->bigInteger('store_key')->unsigned();
        $table->dateTime('log_date')->nullable();
        $table->smallInteger('pos_number')->unsigned();
        $table->char('log_msg_code', 12);
        $table->string('log_msg_data', 80);
        $table->unique(['store_key','log_date','pos_number'], 'index_date_log');
        $table->unique(['store_key','pos_number','log_date'], 'index_pos_log');
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
		Schema::drop('accum_log');
	}
}
