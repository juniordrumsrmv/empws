<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSatTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
                if ( !Schema::hasTable('sat') ) {

                    Schema::create('sat', function(Blueprint $table)
                    {
                            $table->bigInteger('store_key')->unsigned();
                            $table->smallInteger('sat_number')->unsigned();
                            $table->string('sat_name', 30);
                            $table->string('sat_serial', 30);
                            $table->string('sat_version', 20);
                            $table->string('sat_model', 40);
                            $table->date('sat_date_inc');
                            $table->date('sat_date_alt');
                            $table->boolean('sat_status')->nullable();
                            $table->string('sat_manufacturer', 40)->nullable();
                            $table->string('sat_lan_type', 20)->nullable();
                            $table->string('sat_lan_IP', 20)->nullable();
                            $table->string('sat_lan_mask', 20)->nullable();
                            $table->string('sat_lan_gw', 20)->nullable();
                            $table->string('sat_lan_dns', 20)->nullable();
                            $table->string('sat_lan_dns_alt', 20)->nullable();
                            $table->string('sat_mac_addr', 30)->nullable();
                            $table->boolean('sat_lan_online')->nullable();
                            $table->boolean('sat_battery')->nullable();
                            $table->string('sat_disk_space', 30)->nullable();
                            $table->string('sat_disk_usage', 30)->nullable();
                            $table->dateTime('last_update_time')->nullable();
                            $table->string('sat_firmware', 20)->nullable();
                            $table->string('sat_layout', 20)->nullable();
                            $table->string('last_sent_cfe', 60)->nullable();
                            $table->string('first_stored_cfe', 60)->nullable();
                            $table->string('last_stored_cfe', 60)->nullable();
                            $table->dateTime('last_sent_time')->nullable();
                            $table->dateTime('last_comm_time')->nullable();
                            $table->date('cert_create_date')->nullable();
                            $table->date('cert_expr_date')->nullable();
                            $table->primary(['store_key','sat_number'], 'index_sat');
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
		Schema::drop('sat');
	}
}
