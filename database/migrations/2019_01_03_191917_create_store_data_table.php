<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateStoreDataTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
                if ( !Schema::hasTable('store_data') ) {

                    Schema::create('store_data', function(Blueprint $table)
                    {
                            $table->bigInteger('store_key')->unsigned();
                            $table->char('data_name', 30);
                            $table->char('data_id', 16);
                            $table->text('data_value', 65535)->nullable();
                            $table->smallInteger('data_type')->nullable()->default(0);
                            $table->smallInteger('data_hidden')->nullable()->default(0);
                            $table->primary(['store_key','data_id'], 'index_store_data');
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
		Schema::drop('store_data');
	}
}
