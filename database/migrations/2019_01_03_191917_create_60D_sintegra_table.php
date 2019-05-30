<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class Create60DSintegraTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
    if ( !Schema::hasTable('60D_sintegra') ) {

      Schema::create('60D_sintegra', function(Blueprint $table)
      {
        $table->bigInteger('store_key')->unsigned();
        $table->string('type', 2);
        $table->string('sub_type', 1);
        $table->date('fiscal_date');
        $table->string('ecf_serial', 20);
        $table->bigInteger('plu_id')->unsigned();
        $table->decimal('quantity', 16, 3);
        $table->decimal('amount', 16);
        $table->decimal('base_amount', 16);
        $table->char('pos_id', 4);
        $table->decimal('tax_amount', 16);
        $table->index(['store_key','fiscal_date','ecf_serial','plu_id'], 'index_60D');
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
		Schema::drop('60D_sintegra');
	}
}
