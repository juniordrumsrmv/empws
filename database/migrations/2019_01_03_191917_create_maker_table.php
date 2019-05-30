<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMakerTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        if ( !Schema::hasTable('maker') ) {
		Schema::create('maker', function(Blueprint $table)

		{
			$table->bigInteger('maker_key', true)->unsigned();
			$table->string('maker_id', 50)->unique('index_maker_id');
			$table->smallInteger('maker_id_type')->unsigned()->nullable();
			$table->string('maker_name', 50)->nullable();
			$table->string('maker_razao', 50)->nullable();
			$table->string('maker_address', 50)->nullable();
			$table->string('maker_comple', 20)->nullable();
			$table->string('maker_neig', 20)->nullable();
			$table->string('maker_city', 20)->nullable();
			$table->string('maker_state', 20)->nullable();
			$table->string('maker_zip', 12)->nullable();
			$table->string('maker_email', 50)->nullable();
			$table->string('maker_site', 50)->nullable();
			$table->string('maker_phone1', 15)->nullable();
			$table->string('maker_phone2', 15)->nullable();
			$table->string('maker_contact', 20)->nullable();
			$table->char('maker_country_code', 10)->nullable();
			$table->char('maker_state_code', 10)->nullable();
			$table->char('maker_city_code', 16)->nullable();
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
		Schema::drop('maker');
	}
}
