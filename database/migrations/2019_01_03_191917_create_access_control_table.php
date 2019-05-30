<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAccessControlTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
    if ( !Schema::hasTable('access_control') ) {

      Schema::create('access_control', function(Blueprint $table)
      {
        $table->bigInteger('access_control_key', true)->unsigned();
        $table->bigInteger('entity_key')->unsigned();
        $table->bigInteger('agent_key')->unsigned();
        $table->integer('access_type_key')->unsigned();
        $table->decimal('high_limit_value', 15, 3)->nullable();
        $table->decimal('low_limit_value', 15, 3)->nullable();
        $table->decimal('high_limit_percent', 6, 3)->nullable();
        $table->decimal('low_limit_percent', 6, 3)->nullable();
        $table->smallInteger('high_limit_quantity')->unsigned()->nullable();
        $table->unique(['entity_key','agent_key','access_type_key'], 'index_control_ch');
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
		Schema::drop('access_control');
	}
}
