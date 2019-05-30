<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDashboardQuestionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        if ( !Schema::hasTable('dashboard_question') ) {
		Schema::create('dashboard_question', function(Blueprint $table)

		{
			$table->bigInteger('question_key', true)->unsigned();
			$table->bigInteger('question_type')->unsigned();
			$table->string('question_id', 24);
			$table->text('question_value', 65535)->nullable();
			$table->string('question_action', 24);
			$table->unique(['question_key','question_type','question_id'], 'index_dashboard_question');
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
		Schema::drop('dashboard_question');
	}
}
