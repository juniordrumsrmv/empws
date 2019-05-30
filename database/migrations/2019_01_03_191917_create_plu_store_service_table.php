<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePluStoreServiceTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        if ( !Schema::hasTable('plu_store_service') ) {
		Schema::create('plu_store_service', function(Blueprint $table)

		{
			$table->bigInteger('store_key')->unsigned();
			$table->bigInteger('plu_key')->unsigned();
			$table->smallInteger('cst_type_key')->unsigned();
			$table->integer('service_period')->unsigned();
			$table->integer('service_type_key')->unsigned();
			$table->dateTime('service_start_time');
			$table->dateTime('service_end_time');
			$table->decimal('service_price', 15, 3)->nullable();
			$table->decimal('service_cost', 15, 4)->nullable();
			$table->integer('service_maker_period')->unsigned()->nullable();
			$table->string('service_code', 32)->nullable();
			$table->primary(['store_key','plu_key','cst_type_key','service_period','service_type_key','service_start_time'], 'index_plu_store_service');
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
		Schema::drop('plu_store_service');
	}
}
