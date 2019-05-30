<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCustomerAddressTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        if ( !Schema::hasTable('customer_address') ) {
		Schema::create('customer_address', function(Blueprint $table)

		{
			$table->bigInteger('customer_key')->unsigned();
			$table->smallInteger('custaddr_type')->unsigned();
			$table->string('custaddr_address', 60)->nullable();
			$table->string('custaddr_number', 20)->nullable();
			$table->string('custaddr_comple', 20)->nullable();
			$table->string('custaddr_neig', 20)->nullable();
			$table->string('custaddr_city', 20)->nullable();
			$table->string('custaddr_state', 20)->nullable();
			$table->string('custaddr_zip', 12)->nullable();
			$table->string('custaddr_reference', 60)->nullable();
			$table->string('custaddr_phone_area_code', 16)->nullable();
			$table->string('custaddr_phone_number', 16)->nullable();
			$table->boolean('custaddr_addr_time')->nullable();
			$table->char('custaddr_country_code', 10)->nullable();
			$table->char('custaddr_state_code', 10)->nullable();
			$table->char('custaddr_city_code', 16)->nullable();
			$table->primary(['customer_key','custaddr_type']);
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
		Schema::drop('customer_address');
	}
}
