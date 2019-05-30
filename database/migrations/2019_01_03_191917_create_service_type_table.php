<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateServiceTypeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
                if ( !Schema::hasTable('service_type') ) {

                    Schema::create('service_type', function(Blueprint $table)
                    {
                            $table->smallInteger('service_type_key')->unsigned()->primary();
                            $table->string('service_name', 50)->nullable();
                            $table->binary('service_report_header', 65535)->nullable();
                            $table->binary('service_report_footer', 65535)->nullable();
                            $table->binary('service_report_detail', 65535)->nullable();
                            $table->string('service_display_name', 50)->nullable();
                            $table->string('service_short_name', 50)->nullable();
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
		Schema::drop('service_type');
	}
}
