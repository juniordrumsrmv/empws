<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateStatusGroupTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
                if ( !Schema::hasTable('status_group') ) {

                    Schema::create('status_group', function(Blueprint $table)
                    {
                            $table->smallInteger('status_type_key')->unsigned();
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
		Schema::drop('status_group');
	}
}
