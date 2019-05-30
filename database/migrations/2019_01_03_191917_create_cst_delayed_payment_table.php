<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCstDelayedPaymentTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        if ( !Schema::hasTable('cst_delayed_payment') ) {
		Schema::create('cst_delayed_payment', function(Blueprint $table)

		{
			$table->smallInteger('customer_type')->unsigned()->nullable();
			$table->bigInteger('store_key')->unsigned()->nullable();
			$table->smallInteger('media_id')->unsigned()->nullable();
			$table->smallInteger('days')->unsigned()->nullable();
			$table->decimal('interest', 15)->nullable();
			$table->bigInteger('plan_id')->unsigned()->nullable();
			$table->string('name', 50)->nullable();
			$table->smallInteger('interest_type')->nullable();
			$table->smallInteger('allow_negotiation')->nullable();
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
		Schema::drop('cst_delayed_payment');
	}
}
