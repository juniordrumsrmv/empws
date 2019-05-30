<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateStoreTaxTypeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
                if ( !Schema::hasTable('store_tax_type') ) {

                    Schema::create('store_tax_type', function(Blueprint $table)
                    {
                            $table->bigInteger('store_key')->unsigned();
                            $table->bigInteger('tax_type_key')->unsigned();
                            $table->primary(['store_key','tax_type_key'], 'index_store_tax_type');
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
		Schema::drop('store_tax_type');
	}
}
