<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTankTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
                if ( !Schema::hasTable('tank') ) {

                    Schema::create('tank', function(Blueprint $table)
                    {
                            $table->bigInteger('store_key')->unsigned();
                            $table->smallInteger('tank_number')->unsigned();
                            $table->string('tank_name', 30)->nullable();
                            $table->bigInteger('plu_key')->unsigned();
                            $table->dateTime('tank_date_inc')->nullable();
                            $table->dateTime('tank_date_alt')->nullable();
                            $table->decimal('capacity', 15, 3)->nullable();
                            $table->primary(['store_key','tank_number','plu_key'], 'index_tank');
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
		Schema::drop('tank');
	}
}
