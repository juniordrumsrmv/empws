<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePollQuestionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        if ( !Schema::hasTable('poll_question') ) {
		Schema::create('poll_question', function(Blueprint $table)

		{
			$table->bigInteger('poll_key')->unsigned();
			$table->smallInteger('question_number')->unsigned();
			$table->boolean('question_type')->nullable();
			$table->string('question_label')->nullable();
			$table->string('question_prompt')->nullable();
			$table->primary(['poll_key','question_number'], 'index_poll_question');
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
		Schema::drop('poll_question');
	}
}
