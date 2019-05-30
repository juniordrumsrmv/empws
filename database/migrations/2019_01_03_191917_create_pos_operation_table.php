<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePosOperationTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        if ( !Schema::hasTable('pos_operation') ) {
		Schema::create('pos_operation', function(Blueprint $table)

		{
			$table->bigInteger('store_key')->unsigned();
			$table->smallInteger('pos_number')->unsigned();
			$table->integer('ticket_number')->unsigned();
			$table->date('fiscal_date');
			$table->dateTime('start_time');
			$table->bigInteger('cashier_key')->unsigned()->nullable();
			$table->bigInteger('authorizer_key')->unsigned()->nullable();
			$table->smallInteger('pos_oper_type')->unsigned()->nullable();
			$table->decimal('pos_oper_data1', 12, 3)->nullable();
			$table->decimal('pos_oper_data2', 12, 3)->nullable();
			$table->string('pos_oper_data3', 50)->nullable();
			$table->string('pos_oper_data4', 50)->nullable();
			$table->primary(['store_key','pos_number','ticket_number','fiscal_date','start_time'], 'index_pos_operation');
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
		Schema::drop('pos_operation');
	}
}
