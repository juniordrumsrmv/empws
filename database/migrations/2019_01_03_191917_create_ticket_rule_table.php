<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTicketRuleTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
                if ( !Schema::hasTable('ticket_rule') ) {

                    Schema::create('ticket_rule', function(Blueprint $table)
                    {
                            $table->smallInteger('rule_key')->unsigned();
                            $table->smallInteger('sequence')->unsigned();
                            $table->smallInteger('data_id')->nullable();
                            $table->smallInteger('rule_condition')->unsigned()->nullable();
                            $table->string('data_value', 128)->nullable();
                            $table->string('title', 32)->nullable();
                            $table->smallInteger('nor')->unsigned()->nullable();
                            $table->primary(['rule_key','sequence'], 'index_ticket_rule');
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
		Schema::drop('ticket_rule');
	}
}
