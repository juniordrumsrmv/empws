<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSaleItemNozzleTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
                if ( !Schema::hasTable('sale_item_nozzle') ) {

                    Schema::create('sale_item_nozzle', function(Blueprint $table)
                    {
                            $table->bigInteger('store_key')->unsigned();
                            $table->smallInteger('pos_number')->unsigned();
                            $table->integer('ticket_number')->unsigned();
                            $table->dateTime('start_time');
                            $table->smallInteger('sequence')->unsigned();
                            $table->boolean('voided')->nullable();
                            $table->smallInteger('pump_number')->unsigned()->default(0);
                            $table->smallInteger('nozzle_number')->unsigned()->default(0);
                            $table->smallInteger('tank_number')->unsigned()->nullable();
                            $table->bigInteger('plu_id')->unsigned();
                            $table->string('desc_plu', 48);
                            $table->decimal('quantity', 15, 3);
                            $table->decimal('unit_price', 15, 4);
                            $table->decimal('cost', 15, 4);
                            $table->decimal('amount', 15, 3);
                            $table->decimal('gt_quantity', 15, 3);
                            $table->decimal('gt_amount', 15, 3);
                            $table->bigInteger('cashier_key')->unsigned()->nullable();
                            $table->bigInteger('customer_key')->unsigned()->nullable();
                            $table->string('customer_id', 25)->nullable();
                            $table->smallInteger('cst_type_key')->unsigned();
                            $table->primary(['store_key','start_time','pump_number','nozzle_number','ticket_number','sequence'], 'index_sale_item_nozzle');
                            $table->index(['store_key','start_time','plu_id','pump_number','nozzle_number'], 'index_sale_item');
                            $table->index(['store_key','start_time','tank_number','plu_id'], 'index_sale_tank');
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
		Schema::drop('sale_item_nozzle');
	}
}
