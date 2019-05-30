<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSealDumpTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
                if ( !Schema::hasTable('seal_dump') ) {

                    Schema::create('seal_dump', function(Blueprint $table)
                    {
                            $table->bigInteger('store_key')->unsigned();
                            $table->bigInteger('pos_number')->unsigned();
                            $table->date('fiscal_date')->nullable();
                            $table->dateTime('start_time');
                            $table->bigInteger('ticket_number')->unsigned()->nullable();
                            $table->bigInteger('cashier_key')->unsigned();
                            $table->bigInteger('authorizer_key')->unsigned()->nullable();
                            $table->smallInteger('operation_type')->nullable();
                            $table->bigInteger('seal_sequence')->unsigned()->nullable();
                            $table->bigInteger('seal_last_sequence')->unsigned()->nullable();
                            $table->integer('remaining_seal')->nullable();
                            $table->primary(['store_key','pos_number','start_time','cashier_key'], 'index_seal_dump');
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
		Schema::drop('seal_dump');
	}
}
