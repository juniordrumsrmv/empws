<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePafMediaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        if ( !Schema::hasTable('paf_media') ) {
		Schema::create('paf_media', function(Blueprint $table)

		{
			$table->bigInteger('store_key')->unsigned();
			$table->smallInteger('pos_number')->unsigned();
			$table->integer('ticket_number')->unsigned();
			$table->dateTime('start_time');
			$table->smallInteger('sequence')->unsigned();
			$table->smallInteger('ecf_number')->unsigned();
			$table->bigInteger('trn_number')->unsigned()->nullable();
			$table->smallInteger('media_id')->unsigned();
			$table->string('media_name')->nullable();
			$table->decimal('amount', 15, 3)->nullable();
			$table->primary(['store_key','pos_number','ticket_number','start_time','sequence'], 'index_paf_media');
			$table->index(['store_key','ecf_number','ticket_number','sequence'], 'index_ticket_ecf');
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
		Schema::drop('paf_media');
	}
}
