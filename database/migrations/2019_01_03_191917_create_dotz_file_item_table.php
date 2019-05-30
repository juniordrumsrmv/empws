<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDotzFileItemTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        if ( !Schema::hasTable('dotz_file_item') ) {
		Schema::create('dotz_file_item', function(Blueprint $table)

		{
			$table->bigInteger('plu_list_id')->unsigned();
			$table->bigInteger('plu_key')->unsigned();
			$table->dateTime('start_time')->nullable();
			$table->dateTime('end_time')->nullable();
			$table->decimal('points', 6, 4)->nullable();
			$table->decimal('conv_factor', 6, 4)->nullable();
			$table->smallInteger('dotz_engine')->unsigned()->nullable();
			$table->string('provider_code', 60)->nullable();
			$table->string('provider_cnpj', 20)->nullable();
			$table->string('partner_code', 20)->nullable();
			$table->primary(['plu_list_id','plu_key'], 'index_dotz_file_item');
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
		Schema::drop('dotz_file_item');
	}
}
