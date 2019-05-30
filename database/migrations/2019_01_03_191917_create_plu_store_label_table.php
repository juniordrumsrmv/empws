<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePluStoreLabelTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        if ( !Schema::hasTable('plu_store_label') ) {
		Schema::create('plu_store_label', function(Blueprint $table)

		{
			$table->bigInteger('store_key')->unsigned();
			$table->bigInteger('plu_key')->unsigned();
			$table->smallInteger('label_type')->unsigned();
			$table->string('label_address', 30)->nullable();
			$table->integer('label_count')->unsigned()->nullable();
			$table->unique(['store_key','plu_key','label_type','label_address'], 'index_label');
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
		Schema::drop('plu_store_label');
	}
}
