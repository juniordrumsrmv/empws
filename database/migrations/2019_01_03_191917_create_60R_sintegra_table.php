<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class Create60RSintegraTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
    if ( !Schema::hasTable('60R_sintegra') ) {

      Schema::create('60R_sintegra', function(Blueprint $table)
      {
        $table->bigInteger('store_key')->unsigned();
        $table->string('type', 2);
        $table->string('sub_type', 1);
        $table->char('fiscal_month', 6);
        $table->bigInteger('plu_id')->unsigned();
        $table->decimal('quantity', 15, 3);
        $table->decimal('amount', 15);
        $table->decimal('base_amount', 15);
        $table->char('pos_id', 4);
        $table->index(['store_key','fiscal_month','plu_id'], 'index_60R');
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
		Schema::drop('60R_sintegra');
	}
}
