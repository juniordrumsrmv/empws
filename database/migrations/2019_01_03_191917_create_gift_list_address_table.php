<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGiftListAddressTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        if ( !Schema::hasTable('gift_list_address') ) {
		Schema::create('gift_list_address', function(Blueprint $table)

		{
			$table->bigInteger('gift_list_key')->unsigned();
			$table->bigInteger('customer_key')->unsigned();
			$table->smallInteger('custaddr_type')->unsigned();
			$table->primary(['gift_list_key','customer_key','custaddr_type'], 'index_gift_list_address');
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
		Schema::drop('gift_list_address');
	}
}
