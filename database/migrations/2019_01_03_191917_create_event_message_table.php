<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEventMessageTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        if ( !Schema::hasTable('event_message') ) {
		Schema::create('event_message', function(Blueprint $table)

		{
			$table->bigInteger('evmsg_key', true)->unsigned();
			$table->bigInteger('agent_key')->unsigned()->nullable();
			$table->char('evctl_id', 32)->nullable();
			$table->string('evmsg_from', 250)->nullable();
			$table->string('evmsg_to', 250)->nullable();
			$table->string('evmsg_subject', 250)->nullable();
			$table->binary('evmsg_msg', 65535)->nullable();
			$table->string('evmsg_attachment_name', 250)->nullable();
			$table->binary('evmsg_attachment_text', 65535)->nullable();
			$table->boolean('evmsg_send')->nullable();
			$table->boolean('evmsg_popup')->nullable();
			$table->boolean('evmsg_sms')->nullable();
			$table->boolean('evmsg_sent')->nullable();
			$table->boolean('evmsg_popedup')->nullable();
			$table->boolean('evmsg_sent_sms')->nullable();
			$table->dateTime('start_time')->nullable();
			$table->index(['evmsg_send','evmsg_sent','agent_key'], 'index_event_message_send');
			$table->index(['agent_key','evmsg_popup','evmsg_popedup'], 'index_event_message_popup');
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
		Schema::drop('event_message');
	}
}
