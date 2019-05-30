<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUnitTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
                if ( !Schema::hasTable('unit') ) {

                    Schema::create('unit', function(Blueprint $table)
                    {
                            $table->increments('unit_key');
                            $table->char('short_name', 4)->nullable()->unique('index_unit_short_name');
                            $table->string('long_name', 50)->nullable();
                            $table->smallInteger('max_decimals')->unsigned()->nullable();
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
		Schema::drop('unit');
	}
}
