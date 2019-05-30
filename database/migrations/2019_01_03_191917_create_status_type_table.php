<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateStatusTypeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
                if ( !Schema::hasTable('status_type') ) {

                    Schema::create('status_type', function(Blueprint $table)
                    {
                            $table->smallInteger('status_type_key')->unsigned()->primary();
                            $table->string('status_type_name', 20)->nullable();
                            $table->string('status_type_msg', 60)->nullable();
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
		Schema::drop('status_type');
	}
}
