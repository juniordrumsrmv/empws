<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCustodiamUserTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        if ( !Schema::hasTable('custodiam_user') ) {
		Schema::create('custodiam_user', function(Blueprint $table)

		{
			$table->bigInteger('custodiam_store');
			$table->string('custodiam_user_email', 64);
			$table->string('custodiam_user_password', 64)->nullable();
			$table->smallInteger('custodiam_user_type')->unsigned();
			$table->smallInteger('custodiam_flag')->unsigned()->nullable();
			$table->smallInteger('custodiam_partner')->unsigned();
			$table->primary(['custodiam_store','custodiam_user_email','custodiam_user_type','custodiam_partner'], 'index_custodiam_user');
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
		Schema::drop('custodiam_user');
	}
}
