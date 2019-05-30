<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAccessTypeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
    if ( !Schema::hasTable('access_type') ) {

      Schema::create('access_type', function(Blueprint $table)
      {
        $table->integer('access_type_key')->unsigned()->primary();
        $table->string('access_type_name', 50)->nullable();
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
		Schema::drop('access_type');
	}
}
