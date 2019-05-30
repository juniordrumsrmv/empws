<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateWsnfpMensagensTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
                if ( !Schema::hasTable('wsnfp_mensagens') ) {

                    Schema::create('wsnfp_mensagens', function(Blueprint $table)
                    {
                            $table->string('rsl_key', 20);
                            $table->string('store_state', 20);
                            $table->text('rsl_proc_mensagens')->nullable();
                            $table->bigInteger('rsl_action')->unsigned();
                            $table->primary(['rsl_key','store_state'], 'index_wsnfp_mensagens');
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
		Schema::drop('wsnfp_mensagens');
	}
}
