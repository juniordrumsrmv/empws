<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePumpTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        if ( !Schema::hasTable('pump') ) {
		Schema::create('pump', function(Blueprint $table)

		{
			$table->bigInteger('store_key')->unsigned();
			$table->smallInteger('pump_number')->unsigned();
			$table->string('pump_name', 30)->nullable();
			$table->string('pump_serial', 30)->nullable();
			$table->string('pump_manufacturer', 60)->nullable();
			$table->string('pump_model', 40)->nullable();
			$table->string('pump_id_meter', 1)->nullable();
			$table->string('pump_num_seal', 20)->nullable();
			$table->date('pump_date_seal')->nullable();
			$table->dateTime('pump_date_inc')->nullable();
			$table->dateTime('pump_date_alt')->nullable();
			$table->primary(['store_key','pump_number'], 'index_pump');
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
		Schema::drop('pump');
	}
}
