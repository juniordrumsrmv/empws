<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePromotionMediaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        if ( !Schema::hasTable('promotion_media') ) {
		Schema::create('promotion_media', function(Blueprint $table)

		{
			$table->bigInteger('promotion_key')->unsigned();
			$table->smallInteger('media_id');
			$table->smallInteger('sub_media_id')->unsigned();
			$table->string('media_bin', 60);
			$table->smallInteger('splits')->unsigned();
			$table->smallInteger('media_type')->unsigned()->nullable();
			$table->boolean('status')->nullable();
			$table->primary(['promotion_key','media_id','sub_media_id','media_bin','splits'], 'index_promotion_media');
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
		Schema::drop('promotion_media');
	}
}
