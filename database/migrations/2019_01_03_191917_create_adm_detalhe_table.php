<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAdmDetalheTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        if ( !Schema::hasTable('adm_detalhe') ) {
		Schema::create('adm_detalhe', function(Blueprint $table)

		{
			$table->string('num_adm', 30);
			$table->integer('store_key')->unsigned();
			$table->smallInteger('pos_number')->unsigned()->nullable();
			$table->integer('ticket_number')->unsigned()->nullable();
			$table->dateTime('start_time')->nullable();
			$table->date('fiscal_date')->nullable();
			$table->char('sku_id', 14);
			$table->decimal('qty_autorizada', 9, 3)->nullable();
			$table->decimal('qty_estornada', 9, 3)->nullable();
			$table->string('unidade_apresentacao', 10)->nullable();
			$table->decimal('valor_total', 15, 3)->nullable();
			$table->decimal('valor_ms', 15, 3)->nullable();
			$table->decimal('valor_paciente', 15, 3)->nullable();
			$table->decimal('valor_estorno', 15, 3)->nullable();
			$table->integer('cod_indicador')->unsigned()->nullable();
			$table->integer('cod_indicador_estorno')->unsigned()->nullable();
			$table->primary(['num_adm','store_key','sku_id'], 'index_adm_detalhe');
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
		Schema::drop('adm_detalhe');
	}
}
