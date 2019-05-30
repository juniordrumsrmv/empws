<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCustodiamProcessTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        if ( !Schema::hasTable('custodiam_process') ) {
		Schema::create('custodiam_process', function(Blueprint $table)

		{
			$table->integer('iStatus')->nullable()->default(0);
			$table->integer('iProcessMove')->nullable()->default(0);
			$table->integer('iProcessXML')->nullable()->default(0);
			$table->dateTime('szLastTime')->nullable();
			$table->dateTime('szLastMoveTime')->nullable();
			$table->dateTime('szLastContact')->nullable();
			$table->dateTime('szLastConciliare')->nullable();
			$table->dateTime('szNextConciliare')->nullable();
			$table->integer('iConcStatus')->nullable();
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
		Schema::drop('custodiam_process');
	}
}
