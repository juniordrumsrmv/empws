<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSaleItemTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
                if ( !Schema::hasTable('sale_item') ) {

                    Schema::create('sale_item', function(Blueprint $table)
                    {
                            $table->bigInteger('store_key')->unsigned();
                            $table->smallInteger('pos_number')->unsigned();
                            $table->integer('ticket_number')->unsigned();
                            $table->dateTime('start_time');
                            $table->smallInteger('sequence')->unsigned();
                            $table->boolean('voided')->nullable();
                            $table->bigInteger('plu_id')->unsigned();
                            $table->string('desc_plu', 48);
                            $table->decimal('quantity', 15, 3);
                            $table->decimal('unit_price', 15, 3);
                            $table->decimal('amount', 15, 3);
                            $table->decimal('cost', 15, 4);
                            $table->bigInteger('clerk_key')->unsigned()->nullable();
                            $table->bigInteger('authorizer_key')->unsigned()->nullable();
                            $table->decimal('discount', 15, 3)->nullable();
                            $table->decimal('increase', 15, 3)->nullable();
                            $table->char('sku_id', 14)->nullable();
                            $table->boolean('scanned')->nullable();
                            $table->boolean('query_item')->nullable();
                            $table->bigInteger('cpu_clock')->unsigned()->nullable();
                            $table->char('pos_id', 4)->nullable();
                            $table->decimal('tax_percent', 6, 3)->nullable();
                            $table->boolean('pis_cofins')->nullable();
                            $table->integer('type_price')->unsigned()->nullable();
                            $table->boolean('reason_price')->nullable();
                            $table->smallInteger('transaction')->unsigned()->nullable();
                            $table->primary(['store_key','pos_number','ticket_number','start_time','sequence'], 'index_sale_item');
                            $table->index(['store_key','pos_number','start_time','plu_id'], 'index_sale_item');
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
		Schema::drop('sale_item');
	}
}
