<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTaxTypeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
                if ( !Schema::hasTable('tax_type') ) {

                    Schema::create('tax_type', function(Blueprint $table)
                    {
                            $table->increments('tax_type_key');
                            $table->smallInteger('type_key')->unsigned();
                            $table->decimal('percent', 6, 4);
                            $table->decimal('extra_percent', 6, 4);
                            $table->string('description', 40);
                            $table->char('pos_id', 4)->unique('index_tax_type_pos_id');
                            $table->bigInteger('interest_plu')->unsigned()->nullable();
                            $table->boolean('allow_map')->nullable();
                            $table->string('extra', 10)->nullable();
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
		Schema::drop('tax_type');
	}
}
