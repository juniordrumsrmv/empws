<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEntityTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        if ( !Schema::hasTable('entity') ) {
		Schema::create('entity', function(Blueprint $table)

		{
			$table->bigInteger('entity_key', true)->unsigned();
			$table->integer('entity_type_key')->unsigned();
			$table->char('entity_id', 10);
			$table->string('entity_name', 50)->nullable();
			$table->string('entity_external_name')->nullable();
			$table->integer('entity_check_interval')->unsigned()->nullable();
			$table->integer('entity_notify_interval')->unsigned()->nullable();
			$table->dateTime('entity_last_notify')->nullable();
			$table->dateTime('entity_last_check')->nullable();
			$table->boolean('entity_send')->nullable();
			$table->boolean('entity_popup')->nullable();
			$table->boolean('entity_sms')->nullable();
			$table->boolean('entity_cron_option')->nullable();
			$table->string('entity_cron_spec')->nullable();
			$table->dateTime('entity_last_execution')->nullable();
			$table->unique(['entity_type_key','entity_id'], 'index_entity_id');
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
		Schema::drop('entity');
	}
}
