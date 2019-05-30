<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateInventoryTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        if ( !Schema::hasTable('inventory') ) {
		Schema::create('inventory', function(Blueprint $table)

		{
			$table->integer('inventory_number')->unsigned();
			$table->bigInteger('store_key')->unsigned();
			$table->string('name', 30);
			$table->date('inventory_date');
			$table->dateTime('count_date')->nullable();
			$table->dateTime('update_date')->nullable();
			$table->boolean('count_status')->nullable();
			$table->boolean('update_status')->nullable();
			$table->smallInteger('count')->unsigned();
			$table->primary(['inventory_number','store_key','inventory_date'], 'index_inventory');
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
		Schema::drop('inventory');
	}
}
