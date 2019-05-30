<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSalePromotionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
                if ( !Schema::hasTable('sale_promotion') ) {

                    Schema::create('sale_promotion', function(Blueprint $table)
                    {
                            $table->bigInteger('store_key')->unsigned();
                            $table->smallInteger('pos_number')->unsigned();
                            $table->integer('ticket_number')->unsigned();
                            $table->date('fiscal_date');
                            $table->bigInteger('promotion_key')->unsigned();
                            $table->string('name', 50)->nullable();
                            $table->decimal('discount', 15, 3)->nullable();
                            $table->smallInteger('promotion_type')->unsigned()->nullable();
                            $table->smallInteger('promotion_mode')->unsigned()->nullable();
                            $table->primary(['store_key','pos_number','ticket_number','fiscal_date','promotion_key'], 'index_sale_promotion');
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
		Schema::drop('sale_promotion');
	}
}
