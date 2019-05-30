<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSaleHistoryWeightTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
                if ( !Schema::hasTable('sale_history_weight') ) {

                    Schema::create('sale_history_weight', function(Blueprint $table)
                    {
                            $table->bigInteger('store_key')->unsigned();
                            $table->smallInteger('pos_number')->unsigned();
                            $table->integer('ticket_number')->unsigned();
                            $table->dateTime('start_time');
                            $table->smallInteger('sequence')->unsigned();
                            $table->bigInteger('plu_id')->unsigned();
                            $table->bigInteger('authorizer_key')->unsigned()->nullable();
                            $table->decimal('cad_checkout_weight', 7, 3)->nullable();
                            $table->decimal('self_checkout_weight', 7, 3)->nullable();
                            $table->primary(['store_key','pos_number','ticket_number','start_time','sequence'], 'index_sale_history_weight');
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
		Schema::drop('sale_history_weight');
	}
}
