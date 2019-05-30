<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGiftListOTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        if ( !Schema::hasTable('gift_list_o') ) {
		Schema::create('gift_list_o', function(Blueprint $table)

		{
			$table->bigInteger('gift_list_key')->unsigned()->index('index_type');
			$table->smallInteger('list_type_key')->unsigned();
			$table->string('gift_list_password', 50)->nullable();
			$table->smallInteger('gift_list_status')->unsigned();
			$table->bigInteger('groom_key')->unsigned();
			$table->string('groom_name', 60)->nullable()->index('index_name');
			$table->string('groom_phone', 15)->nullable();
			$table->bigInteger('bride_key')->unsigned();
			$table->string('bride_name', 60)->nullable()->index('index_name2');
			$table->string('bride_phone', 15)->nullable();
			$table->date('gift_list_date_wedding');
			$table->string('gift_list_location', 60)->nullable();
			$table->date('gift_list_date_inc');
			$table->date('gift_list_date_alt')->nullable();
			$table->date('gift_list_date_ent1')->nullable();
			$table->date('gift_list_date_ent2')->nullable();
			$table->date('gift_list_date_end');
			$table->string('gift_list_obs')->nullable();
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
		Schema::drop('gift_list_o');
	}
}
