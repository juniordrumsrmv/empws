<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBankingLocationTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        if ( !Schema::hasTable('banking_location') ) {
		Schema::create('banking_location', function(Blueprint $table)

		{
			$table->smallInteger('location_key', true)->unsigned();
			$table->bigInteger('store_key')->unsigned();
			$table->boolean('loc_type');
			$table->string('loc_name', 50)->nullable();
			$table->string('loc_name_alt', 30)->nullable();
			$table->string('loc_address', 50)->nullable();
			$table->string('loc_neig', 20)->nullable();
			$table->string('loc_city', 20)->nullable();
			$table->string('loc_state', 20)->nullable();
			$table->string('loc_zip', 12)->nullable();
			$table->smallInteger('loc_bank')->unsigned()->nullable();
			$table->smallInteger('loc_branch')->unsigned()->nullable();
			$table->integer('loc_account')->unsigned()->nullable();
			$table->integer('loc_cmc')->unsigned();
			$table->integer('loc_ident')->unsigned();
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
		Schema::drop('banking_location');
	}
}
