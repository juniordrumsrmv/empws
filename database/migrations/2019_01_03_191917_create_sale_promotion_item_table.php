<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSalePromotionItemTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
                if ( !Schema::hasTable('sale_promotion_item') ) {

                    Schema::create('sale_promotion_item', function(Blueprint $table)
                    {
                            $table->bigInteger('store_key')->unsigned();
                            $table->smallInteger('pos_number')->unsigned();
                            $table->integer('ticket_number')->unsigned();
                            $table->date('fiscal_date');
                            $table->bigInteger('promotion_key')->unsigned();
                            $table->bigInteger('plu_id')->unsigned();
                            $table->string('short_description', 48)->nullable();
                            $table->bigInteger('quantity')->unsigned()->nullable();
                            $table->bigInteger('quantity_min')->unsigned()->nullable();
                            $table->bigInteger('quantity_max')->unsigned()->nullable();
                            $table->decimal('discount', 15, 3)->nullable();
                            $table->decimal('price', 15, 3)->nullable();
                            $table->decimal('amount_price', 15, 3)->nullable();
                            $table->decimal('unit_price_promo', 15, 3)->nullable();
                            $table->decimal('amount_price_promo', 15, 3)->nullable();
                            $table->primary(['store_key','pos_number','ticket_number','fiscal_date','promotion_key','plu_id'], 'index_sale_promotion_item');
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
		Schema::drop('sale_promotion_item');
	}
}
