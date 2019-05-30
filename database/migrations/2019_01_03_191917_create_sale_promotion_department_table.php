<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSalePromotionDepartmentTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
                if ( !Schema::hasTable('sale_promotion_department') ) {

                    Schema::create('sale_promotion_department', function(Blueprint $table)
                    {
                            $table->bigInteger('store_key')->unsigned();
                            $table->smallInteger('pos_number')->unsigned();
                            $table->integer('ticket_number')->unsigned();
                            $table->date('fiscal_date');
                            $table->bigInteger('promotion_key')->unsigned();
                            $table->string('department_id', 12);
                            $table->primary(['store_key','pos_number','ticket_number','fiscal_date','promotion_key','department_id'], 'index_sale_promotion_department');
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
		Schema::drop('sale_promotion_department');
	}
}
