<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFiscalMapTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        if ( !Schema::hasTable('fiscal_map') ) {
		Schema::create('fiscal_map', function(Blueprint $table)

		{
			$table->bigInteger('store_key')->unsigned();
			$table->date('fiscal_date');
			$table->smallInteger('pos_number')->unsigned();
			$table->integer('ticket_number')->unsigned();
			$table->integer('Z_number')->unsigned();
			$table->decimal('initial_GT', 19, 3);
			$table->decimal('final_GT', 19, 3);
			$table->decimal('void', 15, 3);
			$table->decimal('discount', 15, 3);
			$table->decimal('increase', 15, 3);
			$table->integer('map_number')->unsigned();
			$table->smallInteger('ecf_number')->unsigned();
			$table->integer('initial_ticket')->unsigned();
			$table->integer('restart_count')->unsigned();
			$table->string('ecf_serial', 30);
			$table->dateTime('date_alter')->nullable();
			$table->bigInteger('user_key')->unsigned()->nullable();
			$table->boolean('status_inc')->nullable()->default(1);
			$table->primary(['store_key','fiscal_date','pos_number','ticket_number'], 'index_fiscal_map');
			$table->unique(['store_key','fiscal_date','ecf_number'], 'index_ecf_map');
			$table->index(['store_key','ecf_number','fiscal_date','Z_number','ticket_number'], 'index_ecf_map_1');
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
		Schema::drop('fiscal_map');
	}
}
