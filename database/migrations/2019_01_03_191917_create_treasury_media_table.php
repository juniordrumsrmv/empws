<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTreasuryMediaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
                if ( !Schema::hasTable('treasury_media') ) {

		Schema::create('treasury_media', function(Blueprint $table)
		{
			$table->bigInteger('store_key')->unsigned();
			$table->smallInteger('location')->unsigned();
			$table->smallInteger('media_id')->unsigned();
			$table->smallInteger('extended_media_id')->unsigned();
			$table->decimal('amount', 15, 3);
			$table->primary(['store_key','location','extended_media_id'], 'index_treasury_media');
			$table->index(['store_key','location','media_id'], 'index_treasury_media');
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
		Schema::drop('treasury_media');
	}
}
