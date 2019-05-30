<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGasStationInterventionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        if ( !Schema::hasTable('gas_station_intervention') ) {
		Schema::create('gas_station_intervention', function(Blueprint $table)

		{
			$table->bigInteger('store_key')->unsigned();
			$table->bigInteger('tank_number')->unsigned();
			$table->bigInteger('pump_number')->unsigned();
			$table->bigInteger('nozzle_number')->unsigned();
			$table->bigInteger('plu_key')->unsigned();
			$table->date('fiscal_date');
			$table->bigInteger('intervention_number')->unsigned();
			$table->string('intervention_reason', 64)->nullable();
			$table->string('intervention_name', 64)->nullable();
			$table->string('intervention_sku_co', 20)->nullable();
			$table->string('intervention_sku', 20)->nullable();
			$table->decimal('read_value_initial', 15, 3)->nullable();
			$table->decimal('read_value_final', 15, 3)->nullable();
			$table->decimal('calibration_value', 15, 3)->nullable();
			$table->time('fiscal_hour')->nullable();
			$table->bigInteger('initial_number_seal')->nullable();
			$table->bigInteger('final_number_seal')->nullable();
			$table->primary(['store_key','tank_number','pump_number','nozzle_number','plu_key','fiscal_date','intervention_number'], 'index_gas_station_intervention');
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
		Schema::drop('gas_station_intervention');
	}
}
