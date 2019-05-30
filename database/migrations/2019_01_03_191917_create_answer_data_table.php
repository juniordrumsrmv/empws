<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAnswerDataTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        if ( !Schema::hasTable('answer_data') ) {
		Schema::create('answer_data', function(Blueprint $table)

		{
			$table->bigInteger('store_key')->unsigned();
			$table->smallInteger('pos_number')->unsigned();
			$table->integer('ticket_number')->unsigned();
			$table->dateTime('start_time');
			$table->smallInteger('item_sequence')->unsigned();
			$table->smallInteger('sequence')->unsigned();
			$table->smallInteger('data_id')->unsigned();
			$table->string('data_label', 64)->nullable();
			$table->string('data_value', 80)->nullable();
			$table->primary(['store_key','pos_number','ticket_number','start_time','item_sequence','sequence'], 'index_answer_data');
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
		Schema::drop('answer_data');
	}
}
