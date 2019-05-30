<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePlanPluSplitAmountTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        if ( !Schema::hasTable('plan_plu_split_amount') ) {
		Schema::create('plan_plu_split_amount', function(Blueprint $table)

		{
			$table->bigInteger('ppsa_key', true)->unsigned();
			$table->bigInteger('store_key')->unsigned();
			$table->bigInteger('plu_key')->unsigned();
			$table->smallInteger('cst_type_key')->unsigned();
			$table->smallInteger('media_id')->unsigned();
			$table->smallInteger('media_sub_id')->unsigned();
			$table->smallInteger('ppsa_splits')->unsigned();
			$table->decimal('ppsa_split_amount', 12)->nullable();
			$table->boolean('ppsa_status')->nullable();
			$table->dateTime('ppsa_start_time')->nullable();
			$table->dateTime('ppsa_end_time')->nullable();
			$table->decimal('ppsa_interest_percent', 4)->nullable();
			$table->decimal('ppsa_delayed_payment_percent', 4)->nullable();
			$table->dateTime('last_change_time')->nullable();
			$table->index(['store_key','plu_key','ppsa_status','ppsa_start_time'], 'ppsa_index_1');
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
		Schema::drop('plan_plu_split_amount');
	}
}
