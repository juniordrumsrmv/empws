<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSaleItemPharmaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
                if ( !Schema::hasTable('sale_item_pharma') ) {

                    Schema::create('sale_item_pharma', function(Blueprint $table)
                    {
                            $table->bigInteger('store_key')->unsigned();
                            $table->smallInteger('pos_number')->unsigned();
                            $table->integer('ticket_number')->unsigned();
                            $table->dateTime('start_time');
                            $table->smallInteger('sequence')->unsigned();
                            $table->bigInteger('plu_id')->unsigned();
                            $table->string('desc_plu', 48);
                            $table->decimal('quantity', 15, 3);
                            $table->decimal('unit_price', 15, 3);
                            $table->decimal('amount', 15, 3);
                            $table->decimal('discount', 15, 3);
                            $table->bigInteger('clerk_key')->unsigned()->nullable();
                            $table->integer('request_number')->unsigned()->nullable();
                            $table->string('batch', 50)->nullable();
                            $table->bigInteger('ms_code')->unsigned()->nullable();
                            $table->bigInteger('dcb_code')->unsigned()->nullable();
                            $table->string('dcb_description', 48)->nullable();
                            $table->string('pharma_list_type', 10)->nullable();
                            $table->primary(['store_key','pos_number','ticket_number','start_time','sequence'], 'index_sale_item_pharma');
                            $table->index(['store_key','pos_number','start_time','plu_id'], 'index_sale_item_pharma');
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
		Schema::drop('sale_item_pharma');
	}
}
