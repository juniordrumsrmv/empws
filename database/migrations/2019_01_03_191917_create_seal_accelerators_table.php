<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSealAcceleratorsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
                if ( !Schema::hasTable('seal_accelerators') ) {

                    Schema::create('seal_accelerators', function(Blueprint $table)
                    {
                            $table->bigInteger('store_key')->unsigned();
                            $table->bigInteger('plu_id')->unsigned();
                            $table->decimal('quantity_plu', 6, 3);
                            $table->decimal('quantity_seal', 6, 3);
                            $table->integer('max_repeat_times')->nullable();
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
		Schema::drop('seal_accelerators');
	}
}
