<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class Create60ASintegraTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        if ( !Schema::hasTable('60A_sintegra') ) {

            Schema::create('60A_sintegra', function (Blueprint $table) {
                $table->bigInteger('store_key')->unsigned();
                $table->string('type', 2);
                $table->string('sub_type', 1);
                $table->date('fiscal_date');
                $table->string('ecf_serial', 20);
                $table->char('pos_id', 4);
                $table->decimal('amount', 12);
                $table->index(['store_key', 'fiscal_date', 'ecf_serial', 'pos_id'], 'index_60A');
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
		Schema::drop('60A_sintegra');
	}
}
