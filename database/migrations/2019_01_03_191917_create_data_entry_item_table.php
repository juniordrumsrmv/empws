<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDataEntryItemTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        if ( !Schema::hasTable('data_entry_item') ) {
		Schema::create('data_entry_item', function(Blueprint $table)

		{
			$table->integer('data_entry_key')->unsigned();
			$table->smallInteger('data_entry_item_key')->unsigned();
			$table->string('prompt', 80)->nullable();
			$table->string('name', 50)->nullable();
			$table->char('type', 1)->nullable();
			$table->bigInteger('minimum')->unsigned()->nullable();
			$table->bigInteger('maximum')->unsigned()->nullable();
			$table->boolean('required')->nullable();
			$table->primary(['data_entry_key','data_entry_item_key'], 'index_data_entry_item');
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
		Schema::drop('data_entry_item');
	}
}
