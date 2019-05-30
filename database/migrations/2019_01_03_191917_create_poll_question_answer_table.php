<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePollQuestionAnswerTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        if ( !Schema::hasTable('poll_question_answer') ) {
		Schema::create('poll_question_answer', function(Blueprint $table)

		{
			$table->bigInteger('poll_key')->unsigned();
			$table->smallInteger('question_number')->unsigned();
			$table->smallInteger('answer_number')->unsigned();
			$table->string('answer_text')->nullable();
			$table->primary(['poll_key','question_number','answer_number'], 'index_poll_question_answer');
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
		Schema::drop('poll_question_answer');
	}
}
