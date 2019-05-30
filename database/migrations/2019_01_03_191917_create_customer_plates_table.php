<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCustomerPlatesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        if ( !Schema::hasTable('customer_plates') ) {
		Schema::create('customer_plates', function(Blueprint $table)

		{
			$table->bigInteger('customer_key')->unsigned();
			$table->bigInteger('dependent_id')->unsigned();
			$table->string('plate_number', 10);
			$table->string('brand', 30)->nullable();
			$table->string('model', 30)->nullable();
			$table->string('km', 11)->nullable();
			$table->primary(['customer_key','dependent_id','plate_number'],'index_customer_plates');
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
		Schema::drop('customer_plates');
	}
}
