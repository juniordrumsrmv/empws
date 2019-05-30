'<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSaleExtraTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
                if ( !Schema::hasTable('sale_extra') ) {

                    Schema::create('sale_extra', function(Blueprint $table)
                    {
                            $table->bigInteger('store_key')->unsigned();
                            $table->smallInteger('pos_number')->unsigned();
                            $table->integer('ticket_number')->unsigned();
                            $table->dateTime('start_time');
                            $table->date('fiscal_date');
                            $table->smallInteger('sale_type')->unsigned()->nullable();
                            $table->bigInteger('maker_key')->unsigned()->nullable();
                            $table->char('serial', 8)->nullable();
                            $table->char('cfop', 10)->nullable();
                            $table->decimal('base_icms', 15, 3)->nullable();
                            $table->decimal('icms', 15, 3)->nullable();
                            $table->decimal('base_subst', 15, 3)->nullable();
                            $table->decimal('icms_subst', 15, 3)->nullable();
                            $table->decimal('amo_items', 15, 3)->nullable();
                            $table->decimal('frete', 15, 3)->nullable();
                            $table->decimal('seguro', 15, 3)->nullable();
                            $table->decimal('outras', 15, 3)->nullable();
                            $table->decimal('ipi', 15, 3)->nullable();
                            $table->decimal('amo_invoice', 15, 3)->nullable();
                            $table->bigInteger('store2_key')->unsigned()->nullable();
                            $table->integer('invoice_number')->unsigned()->default(0);
                            $table->smallInteger('invoice_type')->unsigned()->nullable();
                            $table->bigInteger('from_key')->unsigned()->nullable();
                            $table->bigInteger('to_key')->unsigned()->nullable();
                            $table->text('sale_comment', 65535)->nullable();
                            $table->text('request_comment', 65535)->nullable();
                            $table->string('sale_name', 22)->nullable();
                            $table->boolean('voided')->nullable();
                            $table->bigInteger('delivery_item_id')->unsigned()->nullable();
                            $table->date('emission_date')->nullable();
                            $table->primary(['store_key','pos_number','ticket_number','start_time','invoice_number'], 'index_sale_extra');
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
		Schema::drop('sale_extra');
	}
}
