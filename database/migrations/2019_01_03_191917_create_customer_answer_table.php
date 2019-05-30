<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCustomerAnswerTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        if ( !Schema::hasTable('customer_answer') ) {
		Schema::create('customer_answer', function(Blueprint $table)

		{
			$table->bigInteger('store_key')->unsigned();
			$table->smallInteger('pos_number')->unsigned();
			$table->integer('ticket_number')->unsigned();
			$table->dateTime('start_time');
			$table->bigInteger('poll_key')->unsigned();
			$table->boolean('poll_type')->nullable();
			$table->smallInteger('question_number')->unsigned()->nullable();
			$table->boolean('question_type')->nullable();
			$table->smallInteger('answer_number')->unsigned()->nullable();
			$table->string('answer_text')->nullable();
			$table->bigInteger('customer_key')->unsigned()->nullable();
			$table->smallInteger('cst_type_key')->unsigned()->nullable();
			$table->index(['store_key','pos_number','ticket_number','start_time','poll_type','poll_key','question_number'], 'index_customer_answer_ticket');
			$table->index(['poll_type','poll_key','question_number'], 'index_customer_answer_poll');
			$table->index(['customer_key','poll_type','poll_key'], 'index_customer_answer_customer');
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
		Schema::drop('customer_answer');
	}
}
