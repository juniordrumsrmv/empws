<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGiftListItemTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        if ( !Schema::hasTable('gift_list_item') ) {
		Schema::create('gift_list_item', function(Blueprint $table)

		{
			$table->bigInteger('gift_list_key')->unsigned();
			$table->bigInteger('id')->unsigned();
			$table->string('long_description', 50)->nullable();
			$table->decimal('quantity', 9, 3)->nullable();
			$table->decimal('sale_quantity', 9, 3)->nullable();
			$table->primary(['gift_list_key','id'], 'index_gift_list_item');
			$table->index(['gift_list_key','long_description'], 'index_gift_list_item');
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
		Schema::drop('gift_list_item');
	}
}
