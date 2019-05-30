<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSngpcPatientTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
                if ( !Schema::hasTable('sngpc_patient') ) {

                    Schema::create('sngpc_patient', function(Blueprint $table)
                    {
                            $table->bigInteger('sngpc_key')->unsigned()->primary();
                            $table->string('patient_type', 5);
                            $table->string('patient_name', 60);
                            $table->smallInteger('patient_doc_type')->unsigned()->nullable();
                            $table->char('patient_doc_number', 30)->nullable();
                            $table->string('patient_doc_agency', 3)->nullable();
                            $table->string('patient_doc_state', 3)->nullable();
                            $table->date('patient_birthday')->nullable();
                            $table->string('patient_gender', 1)->nullable();
                            $table->boolean('patient_age_type')->nullable();
                            $table->index(['sngpc_key','patient_type','patient_name'], 'sngpc_patient_index_1');
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
		Schema::drop('sngpc_patient');
	}
}
