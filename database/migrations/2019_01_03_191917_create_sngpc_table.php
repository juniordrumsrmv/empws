<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSngpcTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
                if ( !Schema::hasTable('sngpc') ) {

                    Schema::create('sngpc', function(Blueprint $table)
                    {
                            $table->bigInteger('sngpc_key', true)->unsigned();
                            $table->bigInteger('store_origin')->unsigned();
                            $table->bigInteger('store_destiny')->unsigned()->nullable();
                            $table->string('register_type', 1);
                            $table->date('register_date');
                            $table->string('prescription_type', 1)->nullable();
                            $table->string('prescription_number', 20)->nullable();
                            $table->date('prescription_date')->nullable();
                            $table->dateTime('last_change_time')->nullable();
                            $table->integer('request_number')->unsigned()->nullable();
                            $table->bigInteger('sngpc_id')->unsigned()->nullable();
                            $table->smallInteger('status')->unsigned()->nullable();
                            $table->unique(['sngpc_key','store_origin','register_type'], 'index_sngpc');
                            $table->index(['sngpc_key','store_origin','register_type','register_date'], 'sngpc_index_1');
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
		Schema::drop('sngpc');
	}
}
