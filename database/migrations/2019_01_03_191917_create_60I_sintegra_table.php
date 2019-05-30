<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class Create60ISintegraTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
    if ( !Schema::hasTable('60I_sintegra') ) {

      Schema::create('60I_sintegra', function(Blueprint $table)
      {
        $table->bigInteger('store_key')->unsigned();
        $table->string('type', 2);
        $table->string('sub_type', 1);
        $table->date('fiscal_date');
        $table->string('ecf_serial', 20);
        $table->string('doc_model', 2);
        $table->integer('ticket_number')->unsigned();
        $table->smallInteger('sequence')->unsigned();
        $table->bigInteger('plu_id')->unsigned();
        $table->decimal('quantity', 16, 3);
        $table->decimal('amount', 16);
        $table->decimal('base_amount', 16);
        $table->char('pos_id', 4);
        $table->decimal('tax_amount', 16);
        $table->smallInteger('ecf_number')->unsigned();
        $table->decimal('amount_liq', 16);
        $table->decimal('amount_bru', 16);
        $table->decimal('discount', 16);
        $table->integer('Z_number')->unsigned();
        $table->index(['store_key','fiscal_date','ecf_serial','ticket_number','sequence','plu_id'], 'index_60I');
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
		Schema::drop('60I_sintegra');
	}
}
