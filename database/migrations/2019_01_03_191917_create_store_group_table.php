<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateStoreGroupTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
                if ( !Schema::hasTable('store_group') ) {

                    Schema::create('store_group', function(Blueprint $table)
                    {
                            $table->smallInteger('store_group_key', true)->unsigned();
                            $table->smallInteger('parent_store_group_key')->unsigned()->nullable();
                            $table->char('store_group_id', 12)->unique('index_store_group_id');
                            $table->string('store_group_name', 50)->nullable();
                            $table->boolean('allow_store')->nullable();
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
		Schema::drop('store_group');
	}
}
