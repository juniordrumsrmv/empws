<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateWsnfpStatusTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
                if ( !Schema::hasTable('wsnfp_status') ) {

                    Schema::create('wsnfp_status', function(Blueprint $table)
                    {
                            $table->bigInteger('store_key');
                            $table->smallInteger('ecf_number')->unsigned();
                            $table->date('fiscal_date');
                            $table->smallInteger('status_mov')->nullable();
                            $table->smallInteger('status_trn')->nullable();
                            $table->string('observation')->nullable();
                            $table->integer('user')->nullable();
                            $table->bigInteger('last_wsnfp_key')->nullable();
                            $table->dateTime('last_export_time')->nullable();
                            $table->dateTime('last_xml_process_time')->nullable();
                            $table->dateTime('last_check_time')->nullable();
                            $table->bigInteger('last_trans_key')->unsigned()->nullable();
                            $table->smallInteger('pos_number')->unsigned()->nullable();
                            $table->boolean('ecf_status')->nullable();
                            $table->primary(['store_key','ecf_number','fiscal_date'], 'index_wsnfp_status');
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
		Schema::drop('wsnfp_status');
	}
}
