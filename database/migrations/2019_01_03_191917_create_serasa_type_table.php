<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSerasaTypeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
                if ( !Schema::hasTable('serasa_type') ) {

                    Schema::create('serasa_type', function(Blueprint $table)
                    {
                            $table->smallInteger('serasa_type_key')->unsigned()->primary();
                            $table->string('serasa_type_name', 20)->nullable();
                            $table->string('serasa_type_msg', 60)->nullable();
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
		Schema::drop('serasa_type');
	}
}
