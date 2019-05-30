<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSaleNfceTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
                if ( !Schema::hasTable('sale_nfce') ) {

                    Schema::create('sale_nfce', function(Blueprint $table)
                    {
                            $table->bigInteger('store_key')->unsigned();
                            $table->smallInteger('pos_number')->unsigned();
                            $table->bigInteger('nfce_number')->unsigned();
                            $table->dateTime('start_time');
                            $table->string('nfce_key', 64)->nullable();
                            $table->smallInteger('nfce_status')->unsigned()->nullable();
                            $table->smallInteger('sefaz_status')->unsigned()->nullable();
                            $table->string('nfce_protocol', 64)->nullable();
                            $table->dateTime('protocol_date')->nullable();
                            $table->dateTime('emit_date')->nullable();
                            $table->integer('ticket_number')->unsigned()->nullable();
                            $table->text('sefaz_link', 65535)->nullable();
                            $table->primary(['store_key','pos_number','nfce_number','start_time'], 'index_sale_nfce');
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
		Schema::drop('sale_nfce');
	}
}
