<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateViolationTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
                if ( !Schema::hasTable('violation') ) {

                    Schema::create('violation', function(Blueprint $table)
                    {
                            $table->bigInteger('store_key')->nullable();
                            $table->smallInteger('pos_number')->nullable();
                            $table->string('table_name', 50)->nullable();
                            $table->string('column_name', 50)->nullable();
                            $table->string('old_data', 50)->nullable();
                            $table->string('new_data', 50)->nullable();
                            $table->smallInteger('ecf_number')->nullable();
                            $table->dateTime('start_time')->nullable();
                            $table->bigInteger('plu_key')->nullable();
                            $table->bigInteger('id')->nullable();
                            $table->integer('ticket')->nullable();
                            $table->string('user', 50)->nullable();
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
		Schema::drop('violation');
	}
}
