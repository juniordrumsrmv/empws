<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSaleItemExtraTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
                if ( !Schema::hasTable('sale_item_extra') ) {

                    Schema::create('sale_item_extra', function(Blueprint $table)
                    {
                            $table->bigInteger('store_key')->unsigned();
                            $table->smallInteger('pos_number')->unsigned();
                            $table->integer('ticket_number')->unsigned();
                            $table->dateTime('start_time');
                            $table->smallInteger('sequence')->unsigned();
                            $table->char('cfop', 10)->nullable();
                            $table->string('desc_plu', 48);
                            $table->decimal('quantity', 15, 3);
                            $table->decimal('unit_price', 15, 3);
                            $table->decimal('amount', 15, 3);
                            $table->decimal('discount', 15, 3)->nullable();
                            $table->decimal('increase', 15, 3)->nullable();
                            $table->char('pos_id', 4)->nullable();
                            $table->decimal('tax_percent', 6, 3)->nullable();
                            $table->boolean('pis_cofins')->nullable();
                            $table->decimal('tax_reduction', 15, 3)->nullable();
                            $table->decimal('tax_calculation_base', 15, 3)->nullable();
                            $table->decimal('tax_amount', 15, 3)->nullable();
                            $table->decimal('tax_extra_percent', 6, 3)->nullable();
                            $table->decimal('tolerance_max', 5, 3)->nullable();
                            $table->decimal('tolerance_min', 5, 3)->nullable();
                            $table->primary(['store_key','pos_number','ticket_number','start_time','sequence'], 'index_sale_item_extra');
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
		Schema::drop('sale_item_extra');
	}
}
