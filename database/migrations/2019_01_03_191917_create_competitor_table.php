<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCompetitorTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        if ( !Schema::hasTable('competitor') ) {
		Schema::create('competitor', function(Blueprint $table)

		{
			$table->bigInteger('compet_key', true)->unsigned();
			$table->bigInteger('store_key')->unsigned();
			$table->string('compet_name', 50);
			$table->string('compet_flag', 50)->nullable();
			$table->string('compet_address', 50)->nullable();
			$table->string('compet_comple', 20)->nullable();
			$table->string('compet_neig', 20)->nullable();
			$table->string('compet_city', 20)->nullable();
			$table->string('compet_state', 20)->nullable();
			$table->string('compet_zip', 12)->nullable();
			$table->string('compet_email', 50)->nullable();
			$table->string('compet_site', 50)->nullable();
			$table->string('compet_phone', 15)->nullable();
			$table->string('compet_contact', 20)->nullable();
			$table->char('compet_country_code', 10)->nullable();
			$table->char('compet_state_code', 10)->nullable();
			$table->char('compet_city_code', 16)->nullable();
			$table->boolean('compet_status')->nullable();
			$table->index(['store_key','compet_name'], 'index_compe_name');
			$table->index(['store_key','compet_flag'], 'index_compe_flag');
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
		Schema::drop('competitor');
	}
}
