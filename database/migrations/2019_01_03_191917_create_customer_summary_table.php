<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCustomerSummaryTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        if ( !Schema::hasTable('customer_summary') ) {
		Schema::create('customer_summary', function(Blueprint $table)

		{
			$table->bigInteger('customer_key')->unsigned();
			$table->bigInteger('store_key')->unsigned();
			$table->smallInteger('pos_number')->unsigned();
			$table->integer('ticket_number')->unsigned();
			$table->dateTime('start_time');
			$table->string('customer_id', 25)->nullable();
			$table->bigInteger('cashier_key')->unsigned()->nullable();
			$table->bigInteger('authorizer_key')->unsigned()->nullable();
			$table->smallInteger('summary_bank')->unsigned()->nullable();
			$table->smallInteger('summary_branch')->unsigned()->nullable();
			$table->integer('summary_account')->unsigned()->nullable();
			$table->integer('summary_check')->unsigned()->nullable();
			$table->date('summary_date_check')->nullable();
			$table->date('summary_date_payment')->nullable();
			$table->decimal('summary_amount', 15)->nullable();
			$table->char('summary_status', 1)->nullable();
			$table->char('summary_type', 1)->nullable();
			$table->char('summary_alinea', 2)->nullable();
			$table->string('summary_user', 11)->nullable();
			$table->date('summary_date_alt')->nullable();
			$table->smallInteger('summary_sequence')->unsigned()->default(0);
			$table->integer('void_ticket_number')->unsigned()->nullable()->default(0);
			$table->primary(['customer_key','store_key','pos_number','ticket_number','start_time','summary_sequence'], 'index_customer_summary');
			$table->index(['store_key','pos_number','ticket_number','start_time','summary_bank','summary_check'], 'cs1');
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
		Schema::drop('customer_summary');
	}
}
