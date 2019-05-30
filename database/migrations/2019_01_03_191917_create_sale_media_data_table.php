<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSaleMediaDataTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
                if ( !Schema::hasTable('sale_media_data') ) {

                    Schema::create('sale_media_data', function(Blueprint $table)
                    {
                            $table->bigInteger('store_key')->unsigned();
                            $table->smallInteger('pos_number')->unsigned();
                            $table->integer('ticket_number')->unsigned();
                            $table->dateTime('start_time');
                            $table->smallInteger('sequence')->unsigned();
                            $table->smallInteger('data_id')->unsigned();
                            $table->string('data_label', 64)->nullable();
                            $table->string('data_value', 64)->nullable();
                            $table->primary(['store_key','pos_number','ticket_number','start_time','sequence','data_id'], 'index_sale_media_data');
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
		Schema::drop('sale_media_data');
	}
}
