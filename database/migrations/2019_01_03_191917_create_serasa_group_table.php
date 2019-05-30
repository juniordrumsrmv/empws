<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSerasaGroupTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
                if ( !Schema::hasTable('serasa_group') ) {

                    Schema::create('serasa_group', function(Blueprint $table)
                    {
                            $table->smallInteger('serasa_type_key')->unsigned();
                            $table->bigInteger('group_key')->unsigned();
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
		Schema::drop('serasa_group');
	}
}
