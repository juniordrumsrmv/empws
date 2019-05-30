<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSaleCfeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
                if ( !Schema::hasTable('sale_cfe') ) {

                    Schema::create('sale_cfe', function(Blueprint $table)
                    {
                            $table->bigInteger('store_key')->unsigned();
                            $table->smallInteger('pos_number')->unsigned();
                            $table->integer('ticket_number')->unsigned();
                            $table->bigInteger('nfce_number')->unsigned();
                            $table->dateTime('start_time');
                            $table->string('nfce_key', 64)->nullable();
                            $table->smallInteger('nfce_status')->unsigned()->nullable();
                            $table->string('nfce_protocol', 64)->nullable();
                            $table->smallInteger('sefaz_status')->unsigned()->nullable();
                            $table->dateTime('protocol_date')->nullable();
                            $table->dateTime('emit_date')->nullable();
                            $table->boolean('voided')->nullable();
                            $table->decimal('amount_due', 15, 3)->nullable();
                            $table->smallInteger('sale_type')->unsigned()->default(0);
                            $table->smallInteger('status')->unsigned()->nullable()->default(1);
                            $table->text('sefaz_link', 65535)->nullable();
                            $table->string('file_path')->nullable();
                            $table->primary(['store_key','pos_number','ticket_number','start_time','sale_type'], 'index_sale_cfe');
                            $table->index(['store_key','pos_number','ticket_number','start_time','sale_type'], 'index_sale_cfe');
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
		Schema::drop('sale_cfe');
	}
}
