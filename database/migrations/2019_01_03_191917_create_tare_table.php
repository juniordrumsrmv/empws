<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTareTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
                if ( !Schema::hasTable('tare') ) {

                    Schema::create('tare', function(Blueprint $table)
                    {
                            $table->increments('tare_key');
                            $table->string('tare_id', 8)->unique('index_tare_id');
                            $table->string('name', 50)->nullable();
                            $table->smallInteger('decimals')->unsigned()->nullable();
                            $table->decimal('tare_value', 8, 3)->nullable();
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
		Schema::drop('tare');
	}
}
