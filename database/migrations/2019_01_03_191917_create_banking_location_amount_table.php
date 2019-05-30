<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBankingLocationAmountTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        if ( !Schema::hasTable('banking_location_amount') ) {
		Schema::create('banking_location_amount', function(Blueprint $table)

		{
			$table->smallInteger('location_key')->unsigned();
			$table->date('reference_date');
			$table->smallInteger('media_id')->unsigned();
			$table->decimal('amount_added', 15, 3)->nullable();
			$table->decimal('amount_subtracted', 15, 3)->nullable();
			$table->smallInteger('extended_media_id')->unsigned()->nullable();
			$table->primary(['location_key','reference_date','media_id'], 'index_banking_location_amount');
			$table->index(['location_key','reference_date','extended_media_id'], 'index_banking_location_amount_1');
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
		Schema::drop('banking_location_amount');
	}
}
