<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateWsnfpFileControlTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
                if ( !Schema::hasTable('wsnfp_file_control') ) {

                    Schema::create('wsnfp_file_control', function(Blueprint $table)
                    {
                            $table->bigInteger('store_key');
                            $table->smallInteger('ecf_number')->unsigned();
                            $table->date('fiscal_date');
                            $table->string('md5', 32)->index('index_wsnfp_file_control_md5');
                            $table->string('file_name')->nullable();
                            $table->dateTime('export_time')->nullable();
                            $table->bigInteger('wsnfp_key')->nullable();
                            $table->bigInteger('trans_key')->unsigned()->nullable();
                            $table->primary(['store_key','ecf_number','fiscal_date','md5'], 'index_wsnfp_file_control');
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
		Schema::drop('wsnfp_file_control');
	}
}
