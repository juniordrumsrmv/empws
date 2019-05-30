<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAccumDepartmentTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
    if ( !Schema::hasTable('accum_department') ) {

      Schema::create('accum_department', function(Blueprint $table)
      {
        $table->bigInteger('store_key')->unsigned();
        $table->date('fiscal_date');
        $table->bigInteger('department_key')->unsigned();
        $table->boolean('hour');
        $table->decimal('quantity', 15, 3);
        $table->decimal('quantity_canc', 15, 3);
        $table->decimal('amount', 15, 3);
        $table->decimal('amount_canc', 15, 3);
        $table->decimal('return_quantity', 15, 3)->nullable();
        $table->decimal('return_amount', 15, 3)->nullable();
        $table->primary(['store_key','fiscal_date','department_key','hour'], 'accum_department_index');
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
		Schema::drop('accum_department');
	}
}
