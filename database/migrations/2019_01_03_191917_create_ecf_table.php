<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEcfTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        if ( !Schema::hasTable('ecf') ) {
		Schema::create('ecf', function(Blueprint $table)

		{
			$table->bigInteger('store_key')->unsigned();
			$table->smallInteger('ecf_number')->unsigned();
			$table->string('ecf_name', 30);
			$table->string('ecf_serial', 30);
			$table->string('ecf_version', 20);
			$table->string('ecf_model', 40);
			$table->date('ecf_date_inc');
			$table->date('ecf_date_alt');
			$table->boolean('ecf_status')->nullable();
			$table->boolean('ecf_emergency_status')->nullable();
			$table->string('ecf_manufacturer', 40)->nullable();
			$table->string('ecf_mfd', 30)->nullable();
			$table->char('ecf_aditional_mfd', 1)->nullable();
			$table->string('ecf_type', 10)->nullable();
			$table->integer('ecf_ticket_system')->unsigned()->nullable();
			$table->boolean('ecf_system')->nullable();
			$table->string('ecf_firmware_version', 20)->nullable();
			$table->char('ecf_firmware_date', 8)->nullable();
			$table->char('ecf_firmware_time', 6)->nullable();
			$table->boolean('ecf_owner_number')->nullable();
			$table->string('ecf_owner_id', 20)->nullable();
			$table->string('ecf_owner_alt_id', 20)->nullable();
			$table->string('ecf_owner_name', 60)->nullable();
			$table->string('ecf_owner_address', 60)->nullable();
			$table->char('ecf_owner_insertion_date', 8)->nullable();
			$table->char('ecf_owner_insertion_time', 6)->nullable();
			$table->primary(['store_key','ecf_number'], 'index_ecf');
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
		Schema::drop('ecf');
	}
}
