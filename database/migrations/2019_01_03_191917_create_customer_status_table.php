<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCustomerStatusTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        if ( !Schema::hasTable('customer_status') ) {
		Schema::create('customer_status', function(Blueprint $table)

		{
			$table->bigInteger('customer_key')->unsigned()->primary();
			$table->smallInteger('customer_status')->unsigned()->nullable();
			$table->decimal('customer_limit', 15)->nullable();
			$table->decimal('customer_amount_left', 15)->nullable();
			$table->bigInteger('customer_points')->unsigned()->nullable();
			$table->text('customer_comment', 65535)->nullable();
			$table->text('customer_message', 65535)->nullable();
			$table->boolean('customer_flag_message')->nullable();
			$table->boolean('customer_flag_discount')->nullable();
			$table->date('customer_date_discount')->nullable();
			$table->smallInteger('customer_qtt_limit')->unsigned()->nullable();
			$table->smallInteger('customer_qtt_left')->nullable();
			$table->date('customer_qtt_date')->nullable();
			$table->boolean('customer_flag_invoice')->nullable();
			$table->smallInteger('customer_idt_limit')->unsigned()->nullable();
			$table->smallInteger('customer_idt_left')->nullable();
			$table->date('customer_idt_date')->nullable();
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
		Schema::drop('customer_status');
	}
}
