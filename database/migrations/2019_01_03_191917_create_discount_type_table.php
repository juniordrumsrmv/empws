<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDiscountTypeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        if ( !Schema::hasTable('discount_type') ) {
		Schema::create('discount_type', function(Blueprint $table)

		{
			$table->bigInteger('dst_key')->unsigned();
			$table->bigInteger('store_key')->unsigned();
			$table->string('dst_name', 60);
			$table->boolean('dst_application')->nullable();
			$table->boolean('dst_mec')->nullable();
			$table->decimal('dst_min_quantity', 15, 3)->nullable();
			$table->decimal('dst_max_percent', 15, 3)->nullable();
			$table->decimal('dst_max_value', 15, 3)->nullable();
			$table->dateTime('dst_start_time');
			$table->dateTime('dst_end_time')->nullable();
			$table->boolean('dst_accum_item')->nullable();
			$table->boolean('dst_accum_subtotal')->nullable();
			$table->boolean('dst_restriction')->nullable();
			$table->decimal('dst_max_accum_value', 15, 3)->nullable();
			$table->boolean('dst_ind_exceed')->nullable();
			$table->boolean('dst_show_accum')->nullable();
			$table->boolean('dst_error_correction')->nullable();
			$table->boolean('dst_ind_kit')->nullable();
			$table->boolean('dst_ind_bonus')->nullable();
			$table->bigInteger('authorizer_key')->unsigned()->nullable();
			$table->boolean('dst_require_prev_aut')->nullable();
			$table->boolean('dst_dismissal_prev_aut')->nullable();
			$table->boolean('dst_customer_require')->nullable();
			$table->boolean('dst_quant_receipt')->nullable();
			$table->primary(['dst_key','store_key','dst_start_time'], 'index_discount_type');
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
		Schema::drop('discount_type');
	}
}
