<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSalePromotionMediaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
                if ( !Schema::hasTable('sale_promotion_media') ) {

                    Schema::create('sale_promotion_media', function(Blueprint $table)
                    {
                            $table->bigInteger('store_key')->unsigned();
                            $table->smallInteger('pos_number')->unsigned();
                            $table->integer('ticket_number')->unsigned();
                            $table->date('fiscal_date');
                            $table->bigInteger('promotion_key')->unsigned();
                            $table->bigInteger('media_id')->unsigned();
                            $table->primary(['store_key','pos_number','ticket_number','fiscal_date','promotion_key','media_id'], 'index_sale_promotion_media');
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
		Schema::drop('sale_promotion_media');
	}
}
