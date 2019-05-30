<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePromotionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        if ( !Schema::hasTable('promotion') ) {
		Schema::create('promotion', function(Blueprint $table)

		{
			$table->bigInteger('promotion_key')->unsigned()->primary();
			$table->string('name', 50)->nullable();
			$table->dateTime('start')->nullable();
			$table->dateTime('finish')->nullable();
			$table->smallInteger('promotion_type')->unsigned()->nullable();
			$table->smallInteger('promotion_mode')->unsigned()->nullable();
			$table->bigInteger('quantity_min')->unsigned()->nullable();
			$table->bigInteger('quantity_lim')->unsigned()->nullable();
			$table->bigInteger('quantity_max')->unsigned()->nullable();
			$table->decimal('amount', 15, 3)->nullable();
			$table->smallInteger('extra_ticket_type_key')->unsigned()->nullable();
			$table->smallInteger('media_id')->nullable();
			$table->string('promotion_header', 250)->nullable();
			$table->string('promotion_message', 250)->nullable();
			$table->string('promotion_command', 250)->nullable();
			$table->decimal('points', 15, 3)->nullable();
			$table->boolean('status')->nullable();
			$table->boolean('md_partial')->nullable();
			$table->decimal('discount', 15, 3)->nullable();
			$table->smallInteger('flag_discount')->nullable()->default(0);
			$table->integer('reason_type_key')->unsigned()->nullable();
			$table->string('option_01', 250)->nullable();
			$table->string('option_02', 250)->nullable();
			$table->string('option_03', 250)->nullable();
			$table->string('option_04', 250)->nullable();
			$table->string('option_05', 250)->nullable();
			$table->string('option_06', 250)->nullable();
			$table->string('option_07', 250)->nullable();
			$table->string('option_08', 250)->nullable();
			$table->string('option_09', 250)->nullable();
			$table->string('option_10', 250)->nullable();
			$table->string('option_11', 250)->nullable();
			$table->string('option_12', 250)->nullable();
			$table->string('option_13', 250)->nullable();
			$table->string('option_14', 250)->nullable();
			$table->string('option_15', 250)->nullable();
			$table->string('option_16', 250)->nullable();
			$table->string('option_17', 250)->nullable();
			$table->string('option_18', 250)->nullable();
			$table->string('option_19', 250)->nullable();
			$table->string('option_20', 250)->nullable();
			$table->smallInteger('source')->unsigned()->nullable()->default(0);
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
		Schema::drop('promotion');
	}
}
