<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateListTypeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        if ( !Schema::hasTable('list_type') ) {
		Schema::create('list_type', function(Blueprint $table)

		{
			$table->smallInteger('list_type_key')->unsigned()->primary();
			$table->string('list_type_name', 50)->nullable();
			$table->decimal('bonus_percent', 6, 3)->nullable()->default(0.000);
			$table->boolean('delivery')->nullable()->default(0);
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
		Schema::drop('list_type');
	}
}
