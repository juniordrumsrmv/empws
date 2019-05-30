<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSaleLabelPromotionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
                if ( !Schema::hasTable('sale_label_promotion') ) {

                    Schema::create('sale_label_promotion', function(Blueprint $table)
                    {
                            $table->bigInteger('store_key')->unsigned();
                            $table->smallInteger('pos_number')->unsigned();
                            $table->integer('ticket_number')->unsigned();
                            $table->dateTime('start_time');
                            $table->smallInteger('item_sequence')->unsigned();
                            $table->char('label_sku', 14)->nullable();
                            $table->bigInteger('plu_id')->unsigned();
                            $table->string('desc_plu', 48)->nullable();
                            $table->decimal('quantity', 15, 3)->nullable();
                            $table->decimal('amount', 15, 3)->nullable();
                            $table->decimal('discount', 15, 3)->nullable();
                            $table->primary(['store_key','pos_number','ticket_number','start_time','item_sequence'], 'index_sale_label_promotion');
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
		Schema::drop('sale_label_promotion');
	}
}
