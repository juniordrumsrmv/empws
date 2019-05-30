<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGroupTypeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        if ( !Schema::hasTable('group_type') ) {
		Schema::create('group_type', function(Blueprint $table)

		{
			$table->smallInteger('group_type_key')->unsigned()->primary();
			$table->string('group_type_name', 50)->nullable();
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
		Schema::drop('group_type');
	}
}
