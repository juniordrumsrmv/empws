<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCustomerOblataTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        if ( !Schema::hasTable('customer_oblata') ) {
		Schema::create('customer_oblata', function(Blueprint $table)

		{
			$table->bigInteger('promotion_key')->unsigned();
			$table->bigInteger('customer_key')->unsigned();
			$table->decimal('promotion_points', 15, 3)->nullable();
			$table->decimal('promotion_points_left', 15, 3)->nullable();
			$table->primary(['promotion_key','customer_key'], 'index_customer_oblata');
			$table->index(['customer_key','promotion_key'], 'promokey_custkey');
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
		Schema::drop('customer_oblata');
	}
}
