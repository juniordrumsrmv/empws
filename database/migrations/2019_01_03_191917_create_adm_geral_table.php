<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAdmGeralTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        if ( !Schema::hasTable('adm_geral') ) {
		Schema::create('adm_geral', function(Blueprint $table)

		{
			$table->integer('transaction', true);
			$table->string('cnpj_loja', 17);
			$table->integer('cod_solicitacao');
			$table->string('num_adm', 30)->nullable();
			$table->string('crm', 17)->nullable();
			$table->string('cpf', 17)->nullable();
			$table->integer('ticket_number')->unsigned()->nullable();
			$table->char('uni_federal', 2)->nullable();
			$table->date('data_prescricao')->nullable();
			$table->integer('cod_indicador')->unsigned()->nullable();
			$table->integer('cod_indicador_estorno')->unsigned()->nullable();
			$table->integer('status_emporium')->unsigned()->nullable();
			$table->dateTime('start_time')->nullable();
			$table->smallInteger('pos_number')->unsigned()->nullable();
			$table->integer('store_key')->unsigned();
			$table->string('nome', 60)->nullable();
			$table->decimal('valor_total', 15, 3)->nullable();
			$table->decimal('valor_ms', 15, 3)->nullable();
			$table->decimal('valor_paciente', 15, 3)->nullable();
			$table->decimal('valor_estorno', 15, 3)->nullable();
			$table->index(['cnpj_loja','cod_solicitacao'], 'index_adm_geral_01');
			$table->index(['num_adm','store_key'], 'index_adm_geral_02');
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
		Schema::drop('adm_geral');
	}
}
