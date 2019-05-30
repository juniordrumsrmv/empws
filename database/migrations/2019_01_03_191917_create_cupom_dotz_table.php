<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCupomDotzTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        if ( !Schema::hasTable('cupom_dotz') ) {
		Schema::create('cupom_dotz', function(Blueprint $table)

		{
			$table->string('crypt_password', 80)->primary();
			$table->decimal('ticket_amount', 11);
			$table->date('valid_date');
			$table->decimal('allow_change', 11);
			$table->decimal('minimum_sale_amount', 11);
			$table->dateTime('cupom_dotz_date_inc')->nullable();
			$table->dateTime('cupom_dotz_date_alt')->nullable();
			$table->bigInteger('store_key')->unsigned()->nullable();
			$table->smallInteger('pos_number')->unsigned()->nullable();
			$table->integer('ticket_number')->unsigned()->nullable();
			$table->dateTime('start_time')->nullable();
			$table->decimal('amount_due', 15)->nullable();
			$table->bigInteger('plu_key')->unsigned()->nullable();
			$table->decimal('quantity', 10, 3)->nullable();
			$table->index(['store_key','start_time','pos_number','ticket_number','crypt_password'], 'index_tkt');
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
		Schema::drop('cupom_dotz');
	}
}
