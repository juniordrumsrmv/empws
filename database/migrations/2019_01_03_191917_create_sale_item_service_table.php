<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSaleItemServiceTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
                if ( !Schema::hasTable('sale_item_service') ) {

                    Schema::create('sale_item_service', function(Blueprint $table)
                    {
                            $table->bigInteger('store_key')->unsigned();
                            $table->smallInteger('pos_number')->unsigned();
                            $table->integer('ticket_number')->unsigned();
                            $table->dateTime('start_time');
                            $table->smallInteger('item_sequence')->unsigned();
                            $table->smallInteger('sequence')->unsigned();
                            $table->integer('sis_period')->unsigned();
                            $table->decimal('sis_price', 15, 3)->nullable();
                            $table->decimal('sis_discount', 15, 3)->nullable();
                            $table->decimal('sis_increase', 15, 3)->nullable();
                            $table->decimal('sis_cost', 15, 4)->nullable();
                            $table->integer('sis_type_key')->unsigned()->nullable();
                            $table->string('customer_id', 25)->nullable();
                            $table->string('sis_id', 32)->nullable();
                            $table->primary(['store_key','pos_number','ticket_number','start_time','item_sequence','sequence'], 'index_sale_item_service');
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
		Schema::drop('sale_item_service');
	}
}
