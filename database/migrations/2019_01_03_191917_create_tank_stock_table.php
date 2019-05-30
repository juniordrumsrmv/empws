<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTankStockTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
                if ( !Schema::hasTable('tank_stock') ) {

                    Schema::create('tank_stock', function(Blueprint $table)
                    {
                            $table->bigInteger('store_key')->unsigned();
                            $table->smallInteger('tank_number')->unsigned();
                            $table->bigInteger('plu_key')->unsigned();
                            $table->decimal('quantity', 12, 3)->nullable();
                            $table->date('stock_date');
                            $table->decimal('tank_water', 12, 3)->nullable();
                            $table->decimal('tank_temperature', 5)->nullable();
                            $table->smallInteger('tank_flag_input')->unsigned()->nullable();
                            $table->dateTime('last_change_time')->nullable();
                            $table->decimal('quantity_in_stock', 15, 3)->nullable();
                            $table->primary(['store_key','tank_number','stock_date'], 'index_tank_stock');
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
		Schema::drop('tank_stock');
	}
}
