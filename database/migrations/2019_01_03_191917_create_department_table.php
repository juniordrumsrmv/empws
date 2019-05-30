<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDepartmentTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        if ( !Schema::hasTable('department') ) {
		Schema::create('department', function(Blueprint $table)

		{
			$table->smallInteger('department_key', true)->unsigned();
			$table->smallInteger('parent_department_key')->unsigned()->nullable();
			$table->char('id', 12)->unique('index_department_id');
			$table->boolean('allow_plu')->nullable();
			$table->string('name', 50)->nullable();
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
		Schema::drop('department');
	}
}
