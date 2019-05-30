<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCustomerTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        if ( !Schema::hasTable('customer') ) {
		Schema::create('customer', function(Blueprint $table)

		{
			$table->bigInteger('customer_key', true)->unsigned();
			$table->smallInteger('customer_id_type')->unsigned()->nullable();
			$table->string('customer_id', 25)->nullable();
			$table->string('customer_id_alt', 25)->nullable();
			$table->string('customer_name', 60)->nullable()->index('index_name');
			$table->string('customer_name2', 60)->nullable();
			$table->string('customer_address', 60)->nullable();
			$table->string('customer_comple', 20)->nullable();
			$table->string('customer_neig', 20)->nullable();
			$table->string('customer_city', 20)->nullable();
			$table->string('customer_state', 20)->nullable();
			$table->string('customer_zip', 12)->nullable();
			$table->string('customer_email', 50)->nullable();
			$table->string('customer_phone1', 15)->nullable();
			$table->string('customer_phone1_rec', 15)->nullable();
			$table->string('customer_phone2', 15)->nullable();
			$table->date('customer_date_inc');
			$table->date('customer_date_alt');
			$table->smallInteger('customer_type')->unsigned()->nullable();
			$table->bigInteger('customer_code')->nullable();
			$table->dateTime('customer_last_change_time')->nullable();
			$table->string('customer_ie', 15)->nullable();
			$table->boolean('customer_adr_type')->nullable();
			$table->string('customer_adr_time', 15)->nullable();
			$table->char('customer_country_code', 10)->nullable();
			$table->char('customer_state_code', 10)->nullable();
			$table->char('customer_city_code', 16)->nullable();
			$table->string('customer_job_id', 25)->nullable();
			$table->string('customer_job_name', 60)->nullable();
			$table->string('customer_job_address', 60)->nullable();
			$table->string('customer_job_comple', 20)->nullable();
			$table->string('customer_job_neig', 20)->nullable();
			$table->string('customer_job_city', 20)->nullable();
			$table->string('customer_job_state', 20)->nullable();
			$table->string('customer_job_zip', 12)->nullable();
			$table->string('customer_job_phone', 15)->nullable();
			$table->string('customer_job_title', 30)->nullable();
			$table->string('customer_job_revenue', 15)->nullable();
			$table->date('customer_job_date')->nullable();
			$table->boolean('customer_job_type')->nullable();
			$table->string('customer_job_old_name', 60)->nullable();
			$table->string('customer_job_old_phone', 15)->nullable();
			$table->date('customer_job_old_in')->nullable();
			$table->date('customer_job_old_out')->nullable();
			$table->smallInteger('customer_ref_bank1')->unsigned()->nullable();
			$table->smallInteger('customer_ref_branch1')->unsigned()->nullable();
			$table->integer('customer_ref_account1')->unsigned()->nullable();
			$table->smallInteger('customer_ref_bank2')->unsigned()->nullable();
			$table->smallInteger('customer_ref_branch2')->unsigned()->nullable();
			$table->integer('customer_ref_account2')->unsigned()->nullable();
			$table->string('customer_ref_name1', 60)->nullable();
			$table->string('customer_ref_phone1', 15)->nullable();
			$table->string('customer_ref_comple1', 80)->nullable();
			$table->string('customer_ref_name2', 60)->nullable();
			$table->string('customer_ref_phone2', 15)->nullable();
			$table->string('customer_ref_comple2', 80)->nullable();
			$table->boolean('customer_ref_card1')->nullable();
			$table->boolean('customer_ref_card2')->nullable();
			$table->boolean('customer_ref_card3')->nullable();
			$table->boolean('customer_ref_card4')->nullable();
			$table->boolean('customer_ref_card5')->nullable();
			$table->date('customer_birthday')->nullable();
			$table->boolean('customer_gender')->nullable();
			$table->boolean('customer_nacionality')->nullable();
			$table->boolean('customer_education_level')->nullable();
			$table->boolean('customer_civil_status')->nullable();
			$table->string('customer_mothers_name', 40)->nullable();
			$table->string('customer_fathers_name', 40)->nullable();
			$table->string('customer_spouse_id', 25)->nullable();
			$table->string('customer_spouse_name', 60)->nullable();
			$table->date('customer_spouse_birthday')->nullable();
			$table->string('customer_spouse_job_name', 60)->nullable();
			$table->boolean('customer_spouse_job_time')->nullable();
			$table->string('customer_spouse_job_phone', 15)->nullable();
			$table->string('customer_spouse_job_title', 15)->nullable();
			$table->string('customer_spouse_job_revenue', 15)->nullable();
			$table->smallInteger('customer_dependents')->unsigned()->nullable();
			$table->string('customer_dep_name1', 60)->nullable();
			$table->date('customer_dep_birthday1')->nullable();
			$table->boolean('customer_dep_gender1')->nullable();
			$table->string('customer_dep_name2', 60)->nullable();
			$table->date('customer_dep_birthday2')->nullable();
			$table->boolean('customer_dep_gender2')->nullable();
			$table->string('customer_dep_name3', 60)->nullable();
			$table->date('customer_dep_birthday3')->nullable();
			$table->boolean('customer_dep_gender3')->nullable();
			$table->string('customer_vehicles', 80)->nullable();
			$table->string('customer_properties', 80)->nullable();
			$table->string('customer_password', 80)->nullable();
			$table->string('customer_password_md5', 80)->nullable();
			$table->bigInteger('store_key')->unsigned()->nullable()->index('index_store');
			$table->binary('biometrics', 65535)->nullable();
			$table->string('customer_delayed', 20)->nullable();
			$table->index(['customer_last_change_time','store_key'], 'index_customer_last');
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
		Schema::drop('customer');
	}
}
