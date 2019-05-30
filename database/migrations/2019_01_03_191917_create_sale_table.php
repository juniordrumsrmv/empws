<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSaleTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
                if ( !Schema::hasTable('sale') ) {

                    Schema::create('sale', function(Blueprint $table)
                    {
                            $table->bigInteger('store_key')->unsigned();
                            $table->smallInteger('pos_number')->unsigned();
                            $table->integer('ticket_number')->unsigned();
                            $table->dateTime('start_time');
                            $table->boolean('voided')->nullable();
                            $table->boolean('post_sale_void')->nullable();
                            $table->smallInteger('sale_type')->unsigned()->nullable();
                            $table->bigInteger('customer_key')->unsigned()->nullable();
                            $table->decimal('amount_due', 15, 3)->nullable();
                            $table->decimal('change_amount', 15, 3)->nullable();
                            $table->smallInteger('change_media_id')->unsigned()->nullable();
                            $table->bigInteger('clerk_key')->unsigned()->nullable();
                            $table->bigInteger('cashier_key')->unsigned()->nullable();
                            $table->bigInteger('authorizer_key')->unsigned()->nullable();
                            $table->decimal('discount', 15, 3)->nullable();
                            $table->decimal('increase', 15, 3)->nullable();
                            $table->decimal('interest', 15, 3)->nullable();
                            $table->decimal('final_GT', 19, 3);
                            $table->decimal('void_amount', 15, 3);
                            $table->dateTime('received_time')->nullable()->index('index_received_time');
                            $table->dateTime('pos_start_time')->nullable();
                            $table->integer('void_ticket_number')->unsigned()->nullable();
                            $table->date('fiscal_date');
                            $table->boolean('delivery')->nullable();
                            $table->boolean('promotion')->nullable();
                            $table->string('customer_id', 32)->nullable();
                            $table->boolean('customer_id_type')->nullable();
                            $table->decimal('subtotal_discount', 15, 3)->nullable();
                            $table->integer('type_price')->unsigned()->nullable();
                            $table->integer('reference_price')->unsigned()->nullable();
                            $table->integer('default_price')->unsigned()->nullable();
                            $table->bigInteger('cpu_clock_start')->unsigned()->nullable();
                            $table->bigInteger('cpu_clock_subtotal')->unsigned()->nullable();
                            $table->bigInteger('cpu_clock_end')->unsigned()->nullable();
                            $table->bigInteger('cpu_clock_close_drawer')->unsigned()->nullable();
                            $table->primary(['store_key','pos_number','ticket_number','start_time'], 'index_sale');
                            $table->index(['store_key','start_time','pos_number','ticket_number'], 'index_1');
                            $table->index(['store_key','pos_number','fiscal_date'], 'index_fiscal');
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
		Schema::drop('sale');
	}
}
