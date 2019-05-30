<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePromotionExtraTicketTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        if ( !Schema::hasTable('promotion_extra_ticket') ) {
		Schema::create('promotion_extra_ticket', function(Blueprint $table)

		{
			$table->bigInteger('extra_ticket_type_key')->unsigned()->primary();
			$table->string('extra_ticket_type_name', 50)->nullable();
			$table->text('extra_ticket_header', 65535)->nullable();
			$table->text('extra_ticket_detail', 65535)->nullable();
			$table->text('extra_ticket_footer', 65535)->nullable();
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
		Schema::drop('promotion_extra_ticket');
	}
}
