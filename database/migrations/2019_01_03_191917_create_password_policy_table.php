<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePasswordPolicyTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        if ( !Schema::hasTable('password_policy') ) {
		Schema::create('password_policy', function(Blueprint $table)

		{
			$table->boolean('security_level')->primary();
			$table->string('security_name', 30)->nullable();
			$table->smallInteger('max_size')->unsigned()->nullable();
			$table->smallInteger('min_size')->unsigned()->nullable();
			$table->smallInteger('period')->unsigned()->nullable();
			$table->boolean('pass_not_name')->nullable();
			$table->boolean('pass_not_id')->nullable();
			$table->boolean('pass_not_seq')->nullable();
			$table->boolean('pass_not_special')->nullable();
			$table->boolean('pass_special')->nullable();
			$table->boolean('pass_numeric')->nullable();
			$table->boolean('pass_letters')->nullable();
			$table->boolean('pass_upper_case')->nullable();
			$table->boolean('open_pass')->nullable();
			$table->smallInteger('period_warning')->unsigned()->nullable()->default(0);
			$table->boolean('option_01')->nullable();
			$table->boolean('option_02')->nullable();
			$table->smallInteger('option_03')->unsigned()->nullable();
			$table->boolean('option_04')->nullable();
			$table->integer('option_05')->unsigned()->nullable();
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
		Schema::drop('password_policy');
	}
}
