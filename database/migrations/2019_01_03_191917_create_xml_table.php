<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateXmlTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		if ( !Schema::hasTable('xml') ) {

		    Schema::create('xml', function(Blueprint $table)
		    {
			    $table->bigInteger('session_key', true)->unsigned();
			    $table->dateTime('received_time')->nullable();
			    $table->string('file_path');
			    $table->bigInteger('store_key')->unsigned();
			    $table->smallInteger('pos_number')->unsigned();
			    $table->binary('xml_data', 65535)->nullable();
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
		Schema::drop('xml');
	}
}
