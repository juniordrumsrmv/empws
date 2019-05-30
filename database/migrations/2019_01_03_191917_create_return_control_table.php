<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateReturnControlTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
                if ( !Schema::hasTable('return_control') ) {

                    Schema::create('return_control', function(Blueprint $table)
                    {
                            $table->bigInteger('return_number', true)->unsigned();
                            $table->bigInteger('store_key')->unsigned()->nullable();
                            $table->smallInteger('pos_number')->unsigned()->nullable();
                            $table->integer('ticket_number')->unsigned()->nullable();
                            $table->bigInteger('transaction')->unsigned()->nullable();
                            $table->dateTime('start_time')->nullable();
                            $table->date('fiscal_date')->nullable();
                            $table->bigInteger('used_store_key')->unsigned()->nullable();
                            $table->smallInteger('used_pos_number')->unsigned()->nullable();
                            $table->integer('used_ticket_number')->unsigned()->nullable();
                            $table->bigInteger('used_transaction')->unsigned()->nullable();
                            $table->dateTime('used_start_time')->nullable();
                            $table->date('used_fiscal_date')->nullable();
                            $table->decimal('amount', 15, 3)->nullable();
                            $table->boolean('status')->nullable();
                            $table->bigInteger('reason')->unsigned()->nullable();
                            $table->bigInteger('internal_return_number')->unsigned()->nullable();
                            $table->smallInteger('type')->unsigned()->nullable()->default(0);
                            $table->date('validity_begin')->nullable();
                            $table->date('validity_end')->nullable();
                            $table->unique(['store_key','pos_number','transaction','start_time'], 'index_return_control_trn');
                            $table->unique(['store_key','internal_return_number','start_time'], 'index_return_control_internal');
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
		Schema::drop('return_control');
	}
}
