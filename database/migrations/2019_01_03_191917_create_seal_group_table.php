<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSealGroupTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
                if ( !Schema::hasTable('seal_group') ) {

                    Schema::create('seal_group', function(Blueprint $table)
                    {
                            $table->bigInteger('seal_group_id')->unsigned();
                            $table->bigInteger('store_key')->unsigned();
                            $table->smallInteger('pos_number')->unsigned();
                            $table->date('fiscal_date');
                            $table->dateTime('start_time');
                            $table->primary(['store_key','pos_number'], 'index_seal_group');
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
		Schema::drop('seal_group');
	}
}
