<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMediaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        if ( !Schema::hasTable('media') ) {
		Schema::create('media', function(Blueprint $table)

		{
			$table->char('media_id', 10)->primary();
			$table->boolean('is_check')->nullable();
			$table->boolean('is_document')->nullable();
			$table->boolean('is_credit_card')->nullable();
			$table->boolean('is_debit_card')->nullable();
			$table->boolean('is_extended')->nullable();
			$table->smallInteger('base_card_media_id')->unsigned()->nullable();
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
		Schema::drop('media');
	}
}
