<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class Create60MSintegraTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
    if ( !Schema::hasTable('60M_sintegra') ) {

      Schema::create('60M_sintegra', function(Blueprint $table)
      {
        $table->bigInteger('store_key')->unsigned();
        $table->string('type', 2);
        $table->string('sub_type', 1);
        $table->date('fiscal_date');
        $table->string('ecf_serial', 20);
        $table->smallInteger('ecf_number')->unsigned();
        $table->string('doc_model', 2);
        $table->integer('initial_ticket')->unsigned();
        $table->integer('ticket_number')->unsigned();
        $table->integer('Z_number')->unsigned();
        $table->integer('restart_count')->unsigned();
        $table->decimal('amount', 15);
        $table->decimal('final_GT', 19, 3);
        $table->index(['store_key','fiscal_date','ecf_serial','ticket_number'], 'index_60M');
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
		Schema::drop('60M_sintegra');
	}
}
