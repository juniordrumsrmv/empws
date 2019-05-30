<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSaleMediaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
                if ( !Schema::hasTable('sale_media') ) {

                    Schema::create('sale_media', function(Blueprint $table)
                    {
                            $table->bigInteger('store_key')->unsigned();
                            $table->smallInteger('pos_number')->unsigned();
                            $table->integer('ticket_number')->unsigned();
                            $table->dateTime('start_time');
                            $table->smallInteger('sequence')->unsigned();
                            $table->smallInteger('media_id')->unsigned();
                            $table->decimal('amount', 15, 3)->nullable();
                            $table->bigInteger('authorizer_key')->unsigned()->nullable();
                            $table->smallInteger('extended_media_id')->unsigned()->nullable();
                            $table->bigInteger('cpu_clock')->unsigned()->nullable();
                            $table->primary(['store_key','pos_number','ticket_number','start_time','sequence'], 'index_sale_media');
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
		Schema::drop('sale_media');
	}
}
