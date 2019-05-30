<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateServiceControlTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
                if ( !Schema::hasTable('service_control') ) {

                    Schema::create('service_control', function(Blueprint $table)
                    {
                            $table->bigInteger('service_number', true)->unsigned();
                            $table->smallInteger('service_type_key')->unsigned()->nullable();
                            $table->bigInteger('store_key')->unsigned()->nullable();
                            $table->smallInteger('pos_number')->unsigned()->nullable();
                            $table->integer('ticket_number')->unsigned()->nullable();
                            $table->dateTime('start_time')->nullable();
                            $table->bigInteger('transaction')->unsigned()->nullable();
                            $table->date('fiscal_date')->nullable();
                            $table->bigInteger('ref_store_key')->unsigned()->nullable();
                            $table->smallInteger('ref_pos_number')->unsigned()->nullable();
                            $table->integer('ref_ticket_number')->unsigned()->nullable();
                            $table->dateTime('ref_start_time')->nullable();
                            $table->bigInteger('ref_transaction')->unsigned()->nullable();
                            $table->date('ref_fiscal_date')->nullable();
                            $table->bigInteger('cashier_key')->unsigned()->nullable();
                            $table->bigInteger('authorizer_key')->unsigned()->nullable();
                            $table->bigInteger('plu_id')->unsigned();
                            $table->smallInteger('sequence')->unsigned();
                            $table->decimal('amount', 15, 3)->nullable();
                            $table->boolean('status')->nullable();
                            $table->boolean('reason')->nullable();
                            $table->index(['service_type_key','store_key','pos_number','ticket_number','start_time','plu_id'], 'index_service');
                            $table->index(['service_type_key','ref_store_key','ref_pos_number','ref_ticket_number','ref_start_time','plu_id'], 'index_service_ref');
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
		Schema::drop('service_control');
	}
}
