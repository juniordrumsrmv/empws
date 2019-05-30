<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAddressTypeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        if ( !Schema::hasTable('address_type') ) {
		Schema::create('address_type', function(Blueprint $table)

		{
			$table->smallInteger('address_type_key')->unsigned()->primary();
			$table->string('address_type_name', 20)->nullable();
			$table->boolean('address_type_send')->nullable();
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
		Schema::drop('address_type');
	}
}
