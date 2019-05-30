<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCustomerOblataTrnPtsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        if ( !Schema::hasTable('customer_oblata_trn_pts') ) {
		Schema::create('customer_oblata_trn_pts', function(Blueprint $table)

		{
			$table->bigInteger('promotion_key')->unsigned()->nullable();
			$table->bigInteger('customer_key')->unsigned()->nullable();
			$table->decimal('promotion_points', 15, 3)->nullable();
			$table->dateTime('date_transaction')->nullable();
			$table->string('agent_id', 10)->nullable();
			$table->string('type_transaction', 1)->nullable();
			$table->integer('reason_type_key')->unsigned()->nullable();
			$table->smallInteger('pos_number')->unsigned()->nullable();
			$table->bigInteger('store_key')->unsigned()->nullable();
			$table->integer('ticket_number')->unsigned()->nullable();
			$table->integer('trn_number')->unsigned()->nullable();
			$table->index(['promotion_key','customer_key'], 'promokey_pts');
			$table->index(['customer_key','promotion_key'], 'custkey_pts');
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
		Schema::drop('customer_oblata_trn_pts');
	}
}
