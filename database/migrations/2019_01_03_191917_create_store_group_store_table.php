<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateStoreGroupStoreTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
                if ( !Schema::hasTable('store_group_store') ) {

                    Schema::create('store_group_store', function(Blueprint $table)
                    {
                            $table->smallInteger('store_group_key')->unsigned();
                            $table->bigInteger('store_key')->unsigned();
                            $table->primary(['store_group_key','store_key'], 'index_store_group_store');
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
		Schema::drop('store_group_store');
	}
}
