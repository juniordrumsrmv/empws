<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSalePromotionKitTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
                if ( !Schema::hasTable('sale_promotion_kit') ) {

                    Schema::create('sale_promotion_kit', function(Blueprint $table)
                    {
                            $table->bigInteger('store_key')->unsigned();
                            $table->smallInteger('pos_number')->unsigned();
                            $table->integer('ticket_number')->unsigned();
                            $table->date('fiscal_date');
                            $table->bigInteger('promotion_key')->unsigned();
                            $table->bigInteger('plu_kit')->unsigned();
                            $table->bigInteger('quantity_min')->unsigned()->nullable();
                            $table->bigInteger('quantity_max')->unsigned()->nullable();
                            $table->bigInteger('quantity_lim')->unsigned()->nullable();
                            $table->decimal('discount', 15, 3)->nullable();
                            $table->decimal('discount_percent', 15, 3)->nullable();
                            $table->bigInteger('quantity')->unsigned()->nullable();
                            $table->primary(['store_key','pos_number','ticket_number','fiscal_date','promotion_key','plu_kit'], 'index_sale_promotion_kit');
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
		Schema::drop('sale_promotion_kit');
	}
}
