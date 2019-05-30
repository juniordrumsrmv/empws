<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateWsnfpUserTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
                if ( !Schema::hasTable('wsnfp_user') ) {

                    Schema::create('wsnfp_user', function(Blueprint $table)
                    {
                            $table->string('cnpj', 20)->primary();
                            $table->string('user_id', 64)->nullable();
                            $table->string('user_password', 64)->nullable();
                            $table->smallInteger('user_type')->unsigned()->nullable();
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
		Schema::drop('wsnfp_user');
	}
}
