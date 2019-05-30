<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCustomerDependentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        if ( !Schema::hasTable('customer_dependents') ) {
		Schema::create('customer_dependents', function(Blueprint $table)

		{
			$table->bigInteger('customer_key')->unsigned();
			$table->bigInteger('dependent_id')->unsigned();
			$table->string('dependent_name', 60)->nullable();
			$table->primary(['customer_key','dependent_id'], 'index_customer_dependents');
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
		Schema::drop('customer_dependents');
	}
}
